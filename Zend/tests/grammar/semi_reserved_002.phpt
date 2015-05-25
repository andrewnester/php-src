--TEST--
Test semi-reserved words as static class methods
--FILE--
<?php

class Obj
{
    static function empty(){ echo __METHOD__, PHP_EOL; }
    static function callable(){ echo __METHOD__, PHP_EOL; }
    static function trait(){ echo __METHOD__, PHP_EOL; }
    static function extends(){ echo __METHOD__, PHP_EOL; }
    static function implements(){ echo __METHOD__, PHP_EOL; }
    static function const(){ echo __METHOD__, PHP_EOL; }
    static function enddeclare(){ echo __METHOD__, PHP_EOL; }
    static function endfor(){ echo __METHOD__, PHP_EOL; }
    static function endforeach(){ echo __METHOD__, PHP_EOL; }
    static function endif(){ echo __METHOD__, PHP_EOL; }
    static function endwhile(){ echo __METHOD__, PHP_EOL; }
    static function and(){ echo __METHOD__, PHP_EOL; }
    static function global(){ echo __METHOD__, PHP_EOL; }
    static function goto(){ echo __METHOD__, PHP_EOL; }
    static function instanceof(){ echo __METHOD__, PHP_EOL; }
    static function insteadof(){ echo __METHOD__, PHP_EOL; }
    static function interface(){ echo __METHOD__, PHP_EOL; }
    static function new(){ echo __METHOD__, PHP_EOL; }
    static function or(){ echo __METHOD__, PHP_EOL; }
    static function xor(){ echo __METHOD__, PHP_EOL; }
    static function try(){ echo __METHOD__, PHP_EOL; }
    static function use(){ echo __METHOD__, PHP_EOL; }
    static function var(){ echo __METHOD__, PHP_EOL; }
    static function exit(){ echo __METHOD__, PHP_EOL; }
    static function list(){ echo __METHOD__, PHP_EOL; }
    static function clone(){ echo __METHOD__, PHP_EOL; }
    static function include(){ echo __METHOD__, PHP_EOL; }
    static function include_once(){ echo __METHOD__, PHP_EOL; }
    static function throw(){ echo __METHOD__, PHP_EOL; }
    static function array(){ echo __METHOD__, PHP_EOL; }
    static function print(){ echo __METHOD__, PHP_EOL; }
    static function echo(){ echo __METHOD__, PHP_EOL; }
    static function require(){ echo __METHOD__, PHP_EOL; }
    static function require_once(){ echo __METHOD__, PHP_EOL; }
    static function return(){ echo __METHOD__, PHP_EOL; }
    static function else(){ echo __METHOD__, PHP_EOL; }
    static function elseif(){ echo __METHOD__, PHP_EOL; }
    static function default(){ echo __METHOD__, PHP_EOL; }
    static function break(){ echo __METHOD__, PHP_EOL; }
    static function continue(){ echo __METHOD__, PHP_EOL; }
    static function switch(){ echo __METHOD__, PHP_EOL; }
    static function yield(){ echo __METHOD__, PHP_EOL; }
    static function function(){ echo __METHOD__, PHP_EOL; }
    static function if(){ echo __METHOD__, PHP_EOL; }
    static function endswitch(){ echo __METHOD__, PHP_EOL; }
    static function finally(){ echo __METHOD__, PHP_EOL; }
    static function for(){ echo __METHOD__, PHP_EOL; }
    static function foreach(){ echo __METHOD__, PHP_EOL; }
    static function declare(){ echo __METHOD__, PHP_EOL; }
    static function case(){ echo __METHOD__, PHP_EOL; }
    static function do(){ echo __METHOD__, PHP_EOL; }
    static function while(){ echo __METHOD__, PHP_EOL; }
    static function as(){ echo __METHOD__, PHP_EOL; }
    static function catch(){ echo __METHOD__, PHP_EOL; }
    static function die(){ echo __METHOD__, PHP_EOL; }
    static function self(){ echo __METHOD__, PHP_EOL; }
    static function parent(){ echo __METHOD__, PHP_EOL; }
    static function public(){ echo __METHOD__, PHP_EOL; }
    static function protected(){ echo __METHOD__, PHP_EOL; }
    static function private(){ echo __METHOD__, PHP_EOL; }
    static function static(){ echo __METHOD__, PHP_EOL; }
    static function abstract(){ echo __METHOD__, PHP_EOL; }
    static function final(){ echo __METHOD__, PHP_EOL; }
}

Obj::empty();
Obj::callable();
Obj::trait();
Obj::extends();
Obj::implements();
Obj::const();
Obj::enddeclare();
Obj::endfor();
Obj::endforeach();
Obj::endif();
Obj::endwhile();
Obj::and();
Obj::global();
Obj::goto();
Obj::instanceof();
Obj::insteadof();
Obj::interface();
Obj::new();
Obj::or();
Obj::xor();
Obj::try();
Obj::use();
Obj::var();
Obj::exit();
Obj::list();
Obj::clone();
Obj::include();
Obj::include_once();
Obj::throw();
Obj::array();
Obj::print();
Obj::echo();
Obj::require();
Obj::require_once();
Obj::return();
Obj::else();
Obj::elseif();
Obj::default();
Obj::break();
Obj::continue();
Obj::switch();
Obj::yield();
Obj::function();
Obj::if();
Obj::endswitch();
Obj::finally();
Obj::for();
Obj::foreach();
Obj::declare();
Obj::case();
Obj::do();
Obj::while();
Obj::as();
Obj::catch();
Obj::die();
Obj::self();
Obj::parent();
Obj::public();
Obj::protected();
Obj::private();
Obj::static();
Obj::abstract();
Obj::final();

echo "\nDone\n";

--EXPECTF--
Obj::empty
Obj::callable
Obj::trait
Obj::extends
Obj::implements
Obj::const
Obj::enddeclare
Obj::endfor
Obj::endforeach
Obj::endif
Obj::endwhile
Obj::and
Obj::global
Obj::goto
Obj::instanceof
Obj::insteadof
Obj::interface
Obj::new
Obj::or
Obj::xor
Obj::try
Obj::use
Obj::var
Obj::exit
Obj::list
Obj::clone
Obj::include
Obj::include_once
Obj::throw
Obj::array
Obj::print
Obj::echo
Obj::require
Obj::require_once
Obj::return
Obj::else
Obj::elseif
Obj::default
Obj::break
Obj::continue
Obj::switch
Obj::yield
Obj::function
Obj::if
Obj::endswitch
Obj::finally
Obj::for
Obj::foreach
Obj::declare
Obj::case
Obj::do
Obj::while
Obj::as
Obj::catch
Obj::die
Obj::self
Obj::parent
Obj::public
Obj::protected
Obj::private
Obj::static
Obj::abstract
Obj::final

Done
