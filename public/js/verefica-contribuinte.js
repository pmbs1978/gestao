const nif = document.getElementById('nif');
const check = document.getElementById('continuar_sem_contribuinte');
const fail = document.getElementById('fail');
const success = document.getElementById('success');
const btn = document.getElementById('continuar');

nif.addEventListener('keyup', validaContribuinte);

function validaContribuinte(){

    var contribuinte=document.getElementById('nif').value;
    var temErro=0;
    if(contribuinte.length == '9') {
    if (
    contribuinte.substr(0,1) != '1' && // pessoa singular
    contribuinte.substr(0,1) != '2' && // pessoa singular
    contribuinte.substr(0,1) != '3' && // pessoa singular
    contribuinte.substr(0,2) != '45' && // pessoa singular nÃ£o residente
    contribuinte.substr(0,1) != '5' && // pessoa colectiva
    contribuinte.substr(0,1) != '6' && // administraÃ§Ã£o pÃºblica
    contribuinte.substr(0,2) != '70' && // heranÃ§a indivisa
    contribuinte.substr(0,2) != '71' && // pessoa colectiva nÃ£o residente
    contribuinte.substr(0,2) != '72' && // fundos de investimento
    contribuinte.substr(0,2) != '77' && // atribuiÃ§Ã£o oficiosa
    contribuinte.substr(0,2) != '79' && // regime excepcional
    contribuinte.substr(0,1) != '8' && // empresÃ¡rio em nome individual (extinto)
    contribuinte.substr(0,2) != '90' && // condominios e sociedades irregulares
    contribuinte.substr(0,2) != '91' && // condominios e sociedades irregulares
    contribuinte.substr(0,2) != '98' && // nÃ£o residentes
    contribuinte.substr(0,2) != '99' // sociedades civis

    ) { temErro=1;}
    var check1 = contribuinte.substr(0,1)*9;
    var check2 = contribuinte.substr(1,1)*8;
    var check3 = contribuinte.substr(2,1)*7;
    var check4 = contribuinte.substr(3,1)*6;
    var check5 = contribuinte.substr(4,1)*5;
    var check6 = contribuinte.substr(5,1)*4;
    var check7 = contribuinte.substr(6,1)*3;
    var check8 = contribuinte.substr(7,1)*2;

    var total= check1 + check2 + check3 + check4 + check5 + check6 + check7 + check8;
    var divisao= total / 11;
    var modulo11=total - parseInt(divisao)*11;
    if ( modulo11==1 || modulo11==0){ comparador=0; } // excepÃ§Ã£o
    else { comparador= 11-modulo11;}


    var ultimoDigito=contribuinte.substr(8,1)*1;
    if ( ultimoDigito != comparador ){ temErro=1;}

    if (temErro==1){
        btn.disabled = true;
        fail.style.display = 'flex';
        success.style.display = 'none';
    }
    else {
            btn.disabled = false;
            fail.style.display = 'none';
        success.style.display = 'flex';
        }

    }
    else {
        btn.disabled = true;
        fail.style.display = 'flex';
        success.style.display = 'none';

        }
    }

    check.addEventListener('click', () => {
        if(check.checked === true){
            btn.disabled = false;
            fail.style.display = 'none';
            success.style.display = 'flex';
            nif.value = '';
            nif.disabled = true;
        } else {
            btn.disabled = true;
            fail.style.display = 'flex';
            success.style.display = 'none';
            nif.disabled = false;
        }

    })

