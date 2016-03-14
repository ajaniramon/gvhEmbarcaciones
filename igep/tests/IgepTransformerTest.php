<?php
/**
 * Test class for IgepTransformer.
 * Generated by PHPUnit on 2007-11-23 at 13:25:52.
 */
class IgepTransformerTest extends PHPUnit_Framework_TestCase {
	private $obj;
	private $objv;
	// si cuando no pasa validacion, el metodo de transformacion devuelve false
	// pendiente de hacerlo a que esten todos los tests de esta clase y de configep
	private $valida = false;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp() {
    	$this->obj = new IgepTransformer();
    	$this->objv = new IgepTransformer(true);
    	$this->n = ConfigFramework::getNumericSeparatorsFW();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     */
    protected function tearDown() {
    }

    public function testConstructor() {
    	foreach (array('a',0,1,'',null,array()) as $val) {
			try {
				$t = new IgepTransformer('a');
			} catch (Exception $expected) {
	            continue;
	        }
	        $this->fail('constructor solo acepta booleanos: '.$val);
    	}
    }

    public function testConstructor2() {
    	$t = new IgepTransformer(true);
    	$t = new IgepTransformer(false);
    	$t = new IgepTransformer();
    }

    public function testSetDate() {
		$this->assertEquals('',$this->obj->setDate('a-b-c','x/y/z'));
		$this->assertEquals('',$this->objv->setDate('a-b-c','x/y/z'));
    }

    public function testSetDecimal() {
		$this->assertEquals('',$this->obj->setDecimal('.','x'));
		try {
			$this->obj->setDecimal('x','-','x','_');
		} catch (Exception $expected) {
            return;
        }
        $this->fail('separador de decimales el mismo');
    }

    public function testSetDecimal2() {
		try {
			$this->obj->setDecimal('x','-','y','-');
		} catch (Exception $expected) {
            return;
        }
        $this->fail('separador de grupos el mismo');
    }

    public function testSetDecimal3() {
		$this->obj->setDecimal('x','-','y','_');    	
		$this->objv->setDecimal('x','-','y','_');    	
    }

    public function testSetCharacter() {
		$this->assertEquals('',$this->obj->setCharacter('h','j'));
		$this->assertEquals('',$this->obj->setCharacter('H','J'));
		$this->assertEquals('',$this->objv->setCharacter('h','j'));
		$this->assertEquals('',$this->objv->setCharacter('H','J'));
    }

	/**
	 * recibe numero en negocio, y con exponente
	 */
    public function testExpandExponent() {
    	$nd = $this->n['DECIMAL'];
    	$ng = $this->n['GROUP'];
		$this->assertEquals("10{$ng}000{$ng}000",$this->obj->expandExponent("1E7"), 'entero como string con exponente (mayuscula la E)');
		$this->assertEquals("10{$ng}000{$ng}000",$this->obj->expandExponent("1e7"), 'entero como string con exponente');
		$this->assertEquals("10{$ng}000{$ng}000",$this->obj->expandExponent(1e7), 'entero con exponente');
		$this->assertEquals("12{$ng}000{$ng}000",$this->obj->expandExponent(1.2e7), 'entero con exponente y punto');
		$this->assertEquals("12{$ng}345{$nd}60",$this->obj->expandExponent(1.23456e4), 'entero con exponente y 1 decimal');
		$this->assertEquals("12{$ng}345{$nd}67",$this->obj->expandExponent(1.234567e4), 'entero con exponente y 2 decimales');
		$this->assertEquals("12{$ng}345",$this->obj->expandExponent(1.2345e4), 'entero con exponente, sin decimales');
		$this->assertEquals("12{$ng}345",$this->obj->expandExponent(1.2345e+4), 'entero con exponente con +');
		$this->assertEquals("0{$nd}00012345",$this->obj->expandExponent(1.2345e-4), 'entero con exponente con -');
		$this->assertEquals("0{$nd}00001",$this->obj->expandExponent(1e-5), 'entero con exponente con - y sin decimales');
		$this->assertEquals("12345678d9",$this->obj->expandExponent("1d23456789e7",'d','?'), 'entero con exponente y con otros separadores');
    }

	/**
	 * recibe numero en negocio 
	 */
    public function testDecimalPad() {
    	$nd = $this->n['DECIMAL'];
		$this->assertSame("12{$nd}00",$this->obj->decimalPad(12,2), 'sin decimales y completo con 2');
		$this->assertSame("12{$nd}0",$this->obj->decimalPad(12,1), 'sin decimales y completo con 1');
		$this->assertSame("12",$this->obj->decimalPad(12,0), 'sin decimales y no completo');
		$this->assertSame("12{$nd}10",$this->obj->decimalPad(12.1,2), 'con 1 decimal y completo con 2');
		$this->assertSame("12{$nd}1",$this->obj->decimalPad(12.1,1), 'con 1 decimal y completo con 1');
		$this->assertSame("12{$nd}13",$this->obj->decimalPad(12.13,2), 'con 2 decimales y completo con 2');
		$this->assertSame("12{$nd}130",$this->obj->decimalPad(12.13,3), 'con 2 decimales y completo con 3');
		$this->assertSame("12{$nd}13",$this->obj->decimalPad("12{$nd}130",2), 'con 3 decimales y recorto a 2 porque el ultimo era 0');
    }

    public function testDecimalPadException() {
    	try {
			$aux = $this->obj->decimalPad('12'.$this->n['DECIMAL'].'12',1);
    	}
        catch (Exception $expected) {
            return;
        }
        $this->fail('con 2 decimales y trunco a 1');
    }


    /**
    * Recibe un numero en formato bd y completa los decimales con 0's'
    * Devuelve numero en bd
    */
    public function testDecimalPadDatos() {
    	$dbs = IgepDB::supportedDBMS();
    	foreach ($dbs as $db) {
    		$dsn_virtual = array('phptype'=>$db);
    		$d = IgepDB::caracteresNumericos($dsn_virtual);
    		$g = $d['GROUP'];
    		$d = $d['DECIMAL'];
			$this->assertSame("12{$d}00",$this->obj->decimalPadDatos("12",2,$dsn_virtual), $db.': sin decimales y completo con 2');
			$this->assertSame("12{$d}0",$this->obj->decimalPadDatos("12",1,$dsn_virtual), $db.': sin decimales y completo con 1');
			$this->assertSame("12",$this->obj->decimalPadDatos("12",0,$dsn_virtual), $db.': sin decimales y no completo');
			$this->assertSame("12{$d}10",$this->obj->decimalPadDatos("12{$d}1",2,$dsn_virtual), $db.': con 1 decimal y completo con 2');
			$this->assertSame("12{$d}1",$this->obj->decimalPadDatos("12{$d}1",1,$dsn_virtual), $db.': con 1 decimal y completo con 1');
			$this->assertSame("12{$d}13",$this->obj->decimalPadDatos("12{$d}13",2,$dsn_virtual), $db.': con 2 decimales y completo con 2');
			$this->assertSame("12{$d}130",$this->obj->decimalPadDatos("12{$d}13",3,$dsn_virtual), $db.': con 2 decimales y completo con 3');    		
			$this->assertSame("345{$g}12{$d}130",$this->obj->decimalPadDatos("345{$g}12{$d}130",3,$dsn_virtual), $db.': con 3 decimales y grupos');    		
			$this->assertSame("345{$g}12{$d}13",$this->obj->decimalPadDatos("345{$g}12{$d}130",2,$dsn_virtual), $db.': con 3 decimales y grupos y recorto a 2 con 0 final');    		
    	}
    }

    public function testDecimalPadDatosException() {
    	$dbs = IgepDB::supportedDBMS();
    	foreach ($dbs as $db) {
	    	try {
	    		$dsn_virtual = array('phptype'=>$db);
	    		$d = IgepDB::caracteresNumericos($dsn_virtual);
	    		$g = $d['GROUP'];
	    		$d = $d['DECIMAL'];
				$x = $this->obj->decimalPadDatos("12{$d}13",1, $dsn_virtual);
	    	} catch (Exception $expected) {
	            continue;
	        }
	        $this->fail($db.'- con 2 decimales y trunco a 1');
    	}
    }

	// tipo incorrecto
	public function testProcess1() {
		try {
			$this->assertEquals('abc',$this->obj->process('xxx','abc'));
		} catch (Exception $expected) {
            return;
        }
        $this->fail('llamando a transformar tipo incorrecto');
	}
	public function testProcess2() {
		try {
			$this->assertEquals('abc',$this->obj->process('','abc'));
		} catch (Exception $expected) {
            return;
        }
        $this->fail('llamando a transformar tipo incorrecto - cadena vacia');
	}
	public function testProcess3() {
		try {
			$this->assertEquals('abc',$this->obj->process(null,'abc'));
		} catch (Exception $expected) {
            return;
        }
        $this->fail('llamando a transformar tipo incorrecto - null');
	}
	public function testProcess4() {
		try {
			// cojo una clase definida pero que no es del tipo que toca
			$this->obj->process('IgepComunicaIU','abc');
		} catch (Exception $expected) {
            return;
        }
        $this->fail('llamando a transformar tipo que no hereda de donde toca');
	}
	public function testProcess5() {
		$this->assertEquals('abc',$this->obj->process('typeNIF','abc'),'llamando a transformar tipo predefinido');
	}

	// process decimal

    public function testProcessDecimal0() {
		// ejemplos basicos
		$this->obj->setDecimal(".",".");
		$this->assertEquals("1.23",$this->obj->process(TIPO_DECIMAL,"1.23"), 'no cambia el caracter decimal');
		$this->obj->setDecimal(".",",");
		$this->assertEquals("1,23",$this->obj->process(TIPO_DECIMAL,"1.23"), 'cambia el caracter decimal');
		$this->obj->setDecimal(".","X");
		$this->assertEquals("1X2",$this->obj->process(TIPO_DECIMAL,"1.2"), 'dos decimales');
		$this->obj->setDecimal(".","X",'','Y');
		$this->assertEquals("1Y234X2",$this->obj->process(TIPO_DECIMAL,"1234.2"), 'un decimal y un grupo');
		$this->assertEquals("12Y342",$this->obj->process(TIPO_DECIMAL,"12342"), 'entero con grupos');
		$this->obj->setDecimal(".","X");
		$this->assertEquals("1X2",$this->obj->process(TIPO_DECIMAL, "1.2"),'convertir numero con 1 decimal');
		$this->obj->setDecimal(".","X",',','Y');
		$this->assertEquals("7Y654Y321X2",$this->obj->process(TIPO_DECIMAL,"7,654,321.2"),'convertir numero con 1 decimal y grupos');
		$this->assertEquals("7Y654Y321",$this->obj->process(TIPO_DECIMAL,"7,654,321"),'convertir numero sin decimales y grupos');
		$this->assertEquals("7Y654Y321",$this->obj->process(TIPO_DECIMAL,"7,65,4,3,21"),'convertir numero sin decimales y grupos mal formados');
    }

    public function testProcessDecimal2() {
		// no cambia el sep decimal
		$this->obj->setDecimal(".",".",',','Y');
		$this->assertEquals("7Y654Y321.2",$this->obj->process(TIPO_DECIMAL, "7,654,321.2"),'convertir numero con 1 decimal y solo cambia los grupos');
    }

    public function testProcessDecimal3() {
		// numeros con signo
		$this->obj->setDecimal(".","X",',','Y');
		$this->assertEquals("-654",$this->obj->process(TIPO_DECIMAL, "-654"),'convertir numero con signo -');    	
		$this->assertEquals("654",$this->obj->process(TIPO_DECIMAL, "+654"),'convertir numero con signo +');    	
    }

    public function testProcessDecimal4() {
		// numero incorrecto
		$this->objv->setDecimal(".",".",',',' ');
		$this->assertNotEquals("7 654 321.2",$this->objv->process(TIPO_DECIMAL, "7,6a4,321.2"),'convertir numero invalido - con una letra');
		$errores = $this->objv->getTransformErrors();
		$this->assertEquals(1, count($errores), 'hay un error - '.var_export($errores,true));
		$this->assertNotEquals("123",$this->objv->process(TIPO_DECIMAL, "abc"),'convertir numero invalido - todo letras');
		$errores = $this->objv->getTransformErrors();
		$this->assertEquals(2, count($errores), 'hay dos errores - '.var_export($errores,true));
    }

    public function testProcessDecimal5() {
    	// para validate hay que llamar a setDecimal
    	try {
			$x = $this->objv->process(TIPO_DECIMAL,"aaa");
    	}
        catch (Exception $expected) {
        	$x = $this->obj->process(TIPO_DECIMAL,"aaa");
            return;
        }
        $this->fail('llamando a transformar numero sin llamar a setDecimal');
    }

    public function testProcessDecimal6() {
		// numero empty lo devuelve igual
		$this->assertNotSame("0",$this->objv->process(TIPO_DECIMAL, 0), 'numero 0 no es cadena 0');
		$this->assertSame(0, $this->objv->process(TIPO_DECIMAL, 0), 'numero 0 es numero 0');
    }

    public function testProcessDecimal7() {
    	// no cambia formato origen y destino, pero formato incorrecto
		$this->objv->setDecimal(".",".",',',',');
		try {
			$this->assertEquals(0,$this->objv->process(TIPO_DECIMAL, 'a'));
		} catch (Exception $e) {
			return;
		}    	
        $this->fail('no detecta decimal incorrecto a transformar');		
    }

	// process Date

    public function testProcessDate01() {
		$this->objv->setDate("d-m-Y","d-m-Y");
		$this->assertEquals('18-11-2007',$this->objv->process(TIPO_FECHA,"18-11-2007"));
		$this->assertEquals('18-11-2007',$this->obj->process(TIPO_FECHA,"18-11-2007"));
		$this->obj->setDate("d-m-Y","d/m/Y");
		$this->assertEquals("18/11/2007",$this->obj->process(TIPO_FECHA,"18-11-2007"));
		$this->obj->setDate("d-m-Y","Y/m/d");
		$this->assertEquals("2007/11/18",$this->obj->process(TIPO_FECHA,"18-11-2007"));
	}

    public function testProcessDate02() {
		// dias y meses con 1 digito
		$this->obj->setDate("j-m-Y","d/m/Y");
		$this->assertEquals("08/11/2007",$this->obj->process(TIPO_FECHA,"8-11-2007"),'desde dia con 1 digito');
		$this->assertEquals("08/11/2007",$this->obj->process(TIPO_FECHA,"08-11-2007"), 'desde dia con 2 digitos');
		$this->assertEquals("18/11/2007",$this->obj->process(TIPO_FECHA,"18-11-2007"), 'desde dia mayor de 10');

		$this->obj->setDate("d-n-Y","d/m/Y");
		$this->assertEquals("18/01/2007",$this->obj->process(TIPO_FECHA,"18-1-2007"),'desde mes con 1 digito');
		$this->assertEquals("18/01/2007",$this->obj->process(TIPO_FECHA,"18-01-2007"),'desde mes con 2 digitos');
		$this->assertEquals("18/12/2007",$this->obj->process(TIPO_FECHA,"18-12-2007"),'desde mes mayor de 10');
	}

	public function testProcessDate03() {	
		// el resultado siempre sera dia y mes con 2, independiente del formato destino
		$this->obj->setDate("d-m-Y","j/n/Y");
		$this->assertEquals("08/11/2007",$this->obj->process(TIPO_FECHA,"08-11-2007"), 'a dia con 1 digito');
		$this->assertEquals("18/03/2007",$this->obj->process(TIPO_FECHA,"18-03-2007"), 'a mes con 1 digito');
	}

    public function testProcessDate04() {
		$this->obj->setDate("d-m-Y","d/m/Y");
		$this->assertEquals('18/11/2007',$this->obj->process(TIPO_FECHA, "18-11-2007"));
		$this->objv->setDate("d-m-Y","d/m/Y");
		$this->assertEquals('18/11/2007',$this->objv->process(TIPO_FECHA, "18-11-2007"));
    }

    public function testProcessDate05() {
    	// compruebo si hay hora
		$this->objv->setDate("d-m-Y","d/m/Y");
		if ($this->valida)
			$this->assertSame(false,$this->objv->process(TIPO_FECHA, "18-11-2007 aaaa"));
		else
			$this->assertEquals('18/11/2007',$this->objv->process(TIPO_FECHA, "18-11-2007 aaaa"));
		$errores = $this->objv->getTransformErrors();
		$this->assertEquals(1, count($errores), 'fecha sin hora tiene hora - '.var_export($errores,true));
    }

    public function testProcessDate06() {
    	// compruebo si es tipo hora
		$this->objv->setDate("d-m-Y","d/m/Y");
		$this->assertEquals('aaa/00/',$this->objv->process(TIPO_FECHA, "aaa"));
		$errores = $this->objv->getTransformErrors();
		$this->assertEquals(1, count($errores), 'fecha sin hora invalida - '.var_export($errores,true));
    }

    public function testProcessDate07() {
    	// transformar fechas sin llamar a setDate
    	try {
			$x = $this->objv->process(TIPO_FECHA,"18-11-2007");
    	}
        catch (Exception $expected) {
        	$x = $this->obj->process(TIPO_FECHA,"18-11-2007");
            return;
        }
        $this->fail('llamando a transformar fecha sin llamar a setDate');
    }

    public function testProcessDate08() {
    	// transformar fechas sin cambiar formato origen de destino
		$this->objv->setDate("d-m-Y","d-m-Y");
		$x = $this->objv->process(TIPO_FECHA,"18-112007");
		$err = $this->objv->getTransformErrors();
		if (empty($err))
	        $this->fail('al transformar fecha no detecta error en origen: '.var_export($err,true));

		$this->obj->setDate("d-m-Y","d-m-Y");
		$x = $this->obj->process(TIPO_FECHA,"18-112007");
		$err = $this->obj->getTransformErrors();
		if (!empty($err))
	        $this->fail('al transformar fecha no debe detectar error en origen: '.var_export($err,true));
    }

	// process Datetime

    public function testProcessDateTime1() {
    	// transformar fechas-hora sin llamar a setDate
    	try {
			$x = $this->objv->process(TIPO_FECHAHORA,"18-11-2007");
    	}
        catch (Exception $expected) {
        	$x = $this->obj->process(TIPO_FECHAHORA,"18-11-2007");
            return;
        }
        $this->fail('llamando a transformar fechahora sin llamar a setDate');
    }

    public function testProcessDateTime2() {
    	// fechas-hora
		$this->obj->setDate("d-m-Y","d/m/Y");
		$this->assertEquals('18/11/2007 14:35',$this->obj->process(TIPO_FECHAHORA, "18-11-2007 14:35"));
		$this->objv->setDate("d-m-Y","d/m/Y");
		$this->assertEquals('18/11/2007 14:35',$this->objv->process(TIPO_FECHAHORA, "18-11-2007 14:35"));
		$this->assertEquals('18/11/2007 14:35:12',$this->objv->process(TIPO_FECHAHORA, "18-11-2007 14:35:12"));
    }

	public function testProcessDateTime3() {
		// con fechas-hora incorrectas
		$this->objv->setDate("d-m-Y","d/m/Y");

		if ($this->valida)
			$this->assertSame(false,$this->objv->process(TIPO_FECHAHORA, "aaa"));
		else
			$this->assertEquals('aaa/00/',$this->objv->process(TIPO_FECHAHORA, "aaa"));
		$errores = $this->objv->getTransformErrors();
		$this->assertEquals(1, count($errores), 'fecha con hora invalida - la fecha - '.var_export($errores,true));

		if ($this->valida)
			$this->assertSame(false,$this->objv->process(TIPO_FECHAHORA, "18-11-2007 aaa"));
		else
			$this->assertNotEquals('-',$this->objv->process(TIPO_FECHAHORA, "18-11-2007 aaa"));
		$errores = $this->objv->getTransformErrors();
		$this->assertEquals(2, count($errores), 'fecha con hora invalida - toda la hora - '.var_export($errores,true));

		if ($this->valida)
			$this->assertSame(false,$this->objv->process(TIPO_FECHAHORA, "18-11-2007 31:23:45"));
		else
			$this->assertNotEquals('-',$this->objv->process(TIPO_FECHAHORA, "18-11-2007 31:23:45"));
		$errores = $this->objv->getTransformErrors();
		$this->assertEquals(3, count($errores), 'fecha con hora invalida - la hora - '.var_export($errores,true));

		$this->assertEquals('18/11/2007 21:23:45', $this->objv->process(TIPO_FECHAHORA, "18-11-2007 21:23:45"));
		$errores = $this->objv->getTransformErrors();
		$this->assertEquals(3, count($errores), 'no debe haber error con fecha con hora - '.var_export($errores,true));
		// fecha correcta con hora sin segundos
		$this->assertEquals('18/11/2007 21:23', $this->objv->process(TIPO_FECHAHORA, "18-11-2007 21:23"));
		$errores = $this->objv->getTransformErrors();
		$this->assertEquals(3, count($errores), 'no debe haber error con fecha con hora sin minutos - '.var_export($errores,true));
		$this->assertEquals('18/11/2007 21:a:45', $this->objv->process(TIPO_FECHAHORA, "18-11-2007 21:a:45"));
		$errores = $this->objv->getTransformErrors();
		$this->assertEquals(4, count($errores), 'fecha con hora no numerica - '.var_export($errores,true));

		$this->assertEquals('18/11/2007', $this->objv->process(TIPO_FECHAHORA, "18-11-2007 "), 'fecha sin hora pero espacio al final '.var_export($errores,true));
	}

	public function testProcessDateTime4() {
		// el resultado siempre sera dia y mes con 2, independiente del formato destino
		$this->obj->setDate("d-m-Y","d/m/Y");
		$this->assertEquals("18/11/2007",$this->obj->process(TIPO_FECHAHORA,"18-11-2007"), 'sin hora');
		$this->assertEquals("18/11/2007 14:56",$this->obj->process(TIPO_FECHAHORA,"18-11-2007 14:56"), 'con hora y sin segundos');
		$this->assertEquals("18/11/2007 14:56:34",$this->obj->process(TIPO_FECHAHORA,"18-11-2007 14:56:34"), 'con hora y sin segundos');
	}

    public function testProcessDateTime5() {
    	// transformar fechas-hora sin cambiar formato origen de destino
		$this->objv->setDate("d-m-Y","d-m-Y");
		$x = $this->objv->process(TIPO_FECHA,"18-112007 22:23");
		$err = $this->objv->getTransformErrors();
		if (empty($err))
	        $this->fail('al transformar fecha-hora no detecta error en origen: '.var_export($err,true));

		$this->obj->setDate("d-m-Y","d-m-Y");
		$x = $this->obj->process(TIPO_FECHA,"18-112007");
		$err = $this->obj->getTransformErrors();
		if (!empty($err))
	        $this->fail('al transformar fecha-hora no debe detectar error en origen: '.var_export($err,true));
    }

	// process caracter

    public function testProcessCharacter() {
		$this->obj->setCharacter("'",'"');
		$this->assertEquals('1"2',$this->obj->process(TIPO_CARACTER, "1'2"));
    }
 
    public function testProcessCharacter2() {
 		$this->assertSame('',$this->obj->process(TIPO_CARACTER,''),'transformacion de cadena vacia');
		$this->assertTrue(is_null($this->obj->process(TIPO_CARACTER,null)), 'transformacion de null');

		$this->assertEquals("a'bc",$this->obj->process(TIPO_CARACTER,"a'bc"));
		$this->obj->setCharacter("'","''");
		$this->assertEquals("a''bc",$this->obj->process(TIPO_CARACTER,"a'bc"));

		$this->assertEquals("a\\bc",$this->obj->process(TIPO_CARACTER,"a\\bc"));
		$this->obj->setCharacter("\\","\\\\");
		$this->assertEquals("a\\\\bc",$this->obj->process(TIPO_CARACTER,"a\\bc"));
    }

}

?>