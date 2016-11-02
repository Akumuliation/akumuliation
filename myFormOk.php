<?php 
	//*********************** Главная страница *************************
session_start();
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'];
	//*********************** Главная страница *************************
?>

<!--======================= Action в тег <form> отправка методом POST ====================-->
action="http://official1.in.ua/zakaz/zakaz.php"
<!--======================= Action в тег <form> отправка методом POST ====================-->

<!--======================= В тег <form></form> ====================-->
<input type="hidden" name="s1" class="price_field_s1" value="цена" />
<input type="hidden" name="s2" class="price_field_s2" value="id" />
<input type="hidden" name="s3" class="price_field_s3" value="название" />
<input type="hidden" name="utm_source" value="<?= $_GET['utm_source'] ?>" />
<input type="hidden" name="utm_medium"  value="<?= $_GET['utm_medium'] ?>" />
<input type="hidden" name="utm_term"  value="<?= $_GET['utm_term'] ?>" />
<input type="hidden" name="utm_content"  value="<?= $_GET['utm_content'] ?>" />
<input type="hidden" name="utm_campaign" value="<?= $_GET['utm_campaign'] ?>" />
<!--======================= В тег <form></form> ====================-->

<!--======================= Подключение maskedinput перед тегом </body> ====================-->
<script type="text/javascript">
  eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('!2(a){"2"==V 1a&&1a.2s?1a(["1l"],a):a("2j"==V 2h?2f("1l"):2d)}(2($){o m,N=2c.2b,1D=/2a/i.x(N),1h=/1h/i.x(N),Q=/Q/i.x(N);$.7={1F:{"9":"[0-9]",a:"[а-яА-ЯёЁa-21-Z]","*":"[1-9]"},S:!0,T:"20",J:"1Z"},$.1q.1s({u:2(a,b){o c;6(0!==q.v&&!q.1Y(":1X"))w"1p"==V a?(b="1p"==V b?b:a,q.1e(2(){q.1j?q.1j(a,b):q.1u&&(c=q.1u(),c.1V(!0),c.1U("18",b),c.1z("18",a),c.1T())})):(q[0].1j?(a=q[0].1S,b=q[0].1R):14.17&&14.17.1I&&(c=14.17.1I(),a=0-c.1Q().1z("18",-1P),b=a+c.1O.v),{4:a,s:b})},P:2(){w q.1r("P")},7:2(f,g){o h,K,5,F,C,W,r,L;6(!f&&q.v>0){h=$(q[0]);o l=h.1H($.7.T);w l?l():1v 0}w g=$.1s({S:$.7.S,J:$.7.J,15:M},g),K=$.7.1F,5=[],F=r=f.v,C=M,$.1e(f.1m(""),2(i,c){"?"==c?(r--,F=i):K[c]?(5.1n(1M 1L(K[c])),M===C&&(C=5.v-1),F>i&&(W=5.v-1)):5.1n(M)}),q.1r("P").1e(2(){2 R(){6(g.15){z(o i=C;W>=i;i++)6(5[i]&&n[i]===A(i))w;g.15.1t(d)}}2 A(i){w g.J.1b(i<g.J.v?i:0)}2 B(a){z(;++a<r&&!5[a];);w a}2 1x(a){z(;--a>=0&&!5[a];);w a}2 1d(a,b){o i,j;6(!(0>a)){z(i=a,j=B(b);r>i;i++)6(5[i]){6(!(r>j&&5[i].x(n[j])))X;n[i]=n[j],n[j]=A(j),j=B(j)}E(),d.u(25.1K(C,a))}}2 1E(a){o i,c,j,t;z(i=a,c=A(a);r>i;i++)6(5[i]){6(j=B(i),t=n[i],n[i]=c,!(r>j&&5[j].x(t)))X;c=t}}2 1G(){o a=d.y(),3=d.u();6(L&&L.v&&L.v>a.v){z(D(!0);3.4>0&&!5[3.4-1];)3.4--;6(0===3.4)z(;3.4<C&&!5[3.4];)3.4++;d.u(3.4,3.4)}1g{z(D(!0);3.4<r&&!5[3.4];)3.4++;d.u(3.4,3.4)}R()}2 16(){D(),d.y()!=11&&d.1N()}2 1o(e){6(!d.Y("U")){o a,4,s,k=e.1A||e.1w;L=d.y(),8===k||19===k||1D&&1W===k?(a=d.u(),4=a.4,s=a.s,s-4===0&&(4=19!==k?1x(4):s=B(4-1),s=19===k?B(s):s),H(4,s),1d(4,s-1),e.1f()):13===k?16.1t(q,e):27===k&&(d.y(11),d.u(0,D()),e.1f())}}2 1k(e){6(!d.Y("U")){o p,c,O,k=e.1A||e.1w,3=d.u();6(!(e.22||e.23||e.24||1J>k)&&k&&13!==k){6(3.s-3.4!==0&&(H(3.4,3.s),1d(3.4,3.s-1)),p=B(3.4-1),r>p&&(c=26.28(k),5[p].x(c))){6(1E(p),n[p]=c,E(),O=B(p),Q){o a=2(){$.29($.1q.u,d,O)()};1i(a,0)}1g d.u(O);3.4<=W&&R()}e.1f()}}}2 H(a,b){o i;z(i=a;b>i&&r>i;i++)5[i]&&(n[i]=A(i))}2 E(){d.y(n.12(""))}2 D(a){o i,c,3,x=d.y(),I=-1;z(i=0,3=0;r>i;i++)6(5[i]){z(n[i]=A(i);3++<x.v;)6(c=x.1b(3-1),5[i].x(c)){n[i]=c,I=i;X}6(3>x.v){H(i+1,r);X}}1g n[i]===x.1b(3)&&3++,F>i&&(I=i);w a?E():F>I+1?g.S||n.12("")===1C?(d.y()&&d.y(""),H(0,r)):E():(E(),d.y(d.y().2e(0,I+1))),F?i:C}o d=$(q),n=$.1B(f.1m(""),2(c,i){w"?"!=c?K[c]?A(i):c:1v 0}),1C=n.12(""),11=d.y();d.1H($.7.T,2(){w $.1B(n,2(c,i){w 5[i]&&c!=A(i)?c:M}).12("")}),d.2g("P",2(){d.1y(".7").2i($.7.T)}).G("2k.7",2(){6(!d.Y("U")){2l(m);o a;11=d.y(),a=D(),m=1i(2(){d.2m(0)===14.2n&&(E(),a==f.2o("?","").v?d.u(0,a):d.u(a))},10)}}).G("2p.7",16).G("2q.7",1o).G("2r.7",1k).G("1c.7 2t.7",2(){d.Y("U")||1i(2(){o a=D(!0);d.u(a),R()},0)}),1h&&Q&&d.1y("1c.7").G("1c.7",1G),D()})}})});',62,154,'||function|pos|begin|tests|if|mask||||||||||||||||buffer|var||this|len|end||caret|length|return|test|val|for|getPlaceholder|seekNext|firstNonMaskPos|checkVal|writeBuffer|partialPosition|on|clearBuffer|lastMatch|placeholder|defs|oldVal|null|ua|next|unmask|android|tryFireCompleted|autoclear|dataName|readonly|typeof|lastRequiredNonMaskPos|break|prop|||focusText|join||document|completed|blurEvent|selection|character|46|define|charAt|input|shiftL|each|preventDefault|else|chrome|setTimeout|setSelectionRange|keypressEvent|jquery|split|push|keydownEvent|number|fn|trigger|extend|call|createTextRange|void|keyCode|seekPrev|off|moveStart|which|map|defaultBuffer|iPhone|shiftR|definitions|androidInputEvent|data|createRange|32|max|RegExp|new|change|text|1e5|duplicate|selectionEnd|selectionStart|select|moveEnd|collapse|127|hidden|is|_|rawMaskFn|zA|ctrlKey|altKey|metaKey|Math|String||fromCharCode|proxy|iphone|userAgent|navigator|jQuery|substring|require|one|exports|removeData|object|focus|clearTimeout|get|activeElement|replace|blur|keydown|keypress|amd|paste'.split('|'),0,{}))
  $(document).ready(function() {
    $(".phone").mask("+38 (0*9) 999-99-99");
  });
</script>
<!--======================= Подключение maskedinput перед тегом </body> ====================-->