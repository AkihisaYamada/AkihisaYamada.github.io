<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>Akihisa Yamada</title>
<style>
<!--
  body { font-family:"Times New Roman","Times","serif","メイリオ"; }
  .bibinfo { display: inline-block; }
  .author, .author a { text-decoration:none; color:maroon; }
  .title, .title a { text-decoration:none; color:navy; font-weight:bold; }
  .title::after { color: black; font-weight: normal; content: "."; }
  .booktitle, .booktitle a { text-decoration:none; color:black; font-style:italic; }
  .institute, .institute a { text-decoration:none; color:black; font-style:italic; }
  .publisher, .publisher a { text-decoration:none; color:black; font-style:italic; }
  .series {}
  .place {}
  .month {}
  .year {}
  .errata { display: inline-block; }
  .doi, .doi a { text-decoration:none; color:black; }
  .doi:before { content: "DOI="; }
  .note { display: inline-block; }
  .note a { text-decoration:none; color:black; }
  .note:before { content: "("; }
  .note:after { content: ")"; }
  ul.publications li { margin-bottom:1.5ex; }
  ol.publications li { margin-bottom:1.5ex; }
  a:hover, .author a:hover, .booktitle a:hover, .note a:hover { text-decoration:underline; }
  .toggle:hover { text-decoration:underline; }
  table th { vertical-align:top; }
-->
</style>
<script type="text/javascript">
 function toggle(o,a,b) {
  o.title = a;
  o.innerHTML = b;
  o.onclick = function() { toggle(o,b,a); };
 }
 function unabbrev_prev(o,full,short) {
  o.previousSibling.innerHTML = full;
  o.innerHTML = ' (' + short + ')';
  o.title = 'Click to abbreviate';
  o.onclick = function() { abbrev_prev(o,full,short); };
 }
 function abbrev_prev(o,full,short) {
  o.previousSibling.innerHTML = '';
  o.innerHTML = short;
  o.title = 'Click to show full name';
  o.onclick = function() { unabbrev_prev(o,full,short); };
 }
 function toggle(o, t, ahead, atitle, abody) {
  var bbody = t.innerHTML;
  var bhead = o.innerHTML;
  var btitle = o.title;
  t.innerHTML = abody;
  o.innerHTML = ahead;
  o.title = atitle;
  o.onclick = function() { toggle(o, t, bhead, btitle, bbody); };
 }
</script>
<?php
	function esc($str) {
		return addslashes(htmlspecialchars($str));
	}
	function toggler_attr($bhead, $btitle, $bbody) {
		return "class=toggle onclick=\"toggle(this, this.nextSibling, '".
			esc($bhead)."', '".esc($btitle)."', '".esc($bbody)."')\"";
	}
	function hider($selfid, $id, $ahead, $bhead, $atitle, $btitle) {
		echo "<span id='$selfid' class=toggle title='".esc($btitle).
			 "' onclick=\"toggle(this, getElementById('$id'), '".
			 esc($ahead)."', '".esc($atitle)."', '')\">".
			 $bhead. "</span>";
	}
	function errata($body) {
		echo "<span class=errata>(<span ".
			toggler_attr("errata", "Hide", ": $body").
			" title='Show'>errata</span><span></span>)</span>";
	}
	function abbrev($full,$short) {
		echo "<span></span><span class=toggle onclick=\"unabbrev_prev(this, '".
			esc($full) ."', '". esc($short) ."')\" title='Click to show full name'>$short</span>";
	}
	function toggle($a,$b) {
		echo "<span class=toggle
		 onclick=\"toggle(this, '$a', '$b')\"
		 title='$b'>$a</span>";
	}
	function event($short,$full,$url) {
		echo "<span class=booktitle>";
		abbrev("<a href='$url'>$full</a>",$short);
		echo "</span>";
	}
	$AY = '<span class=author>Akihisa Yamada</span>';
	$RT = '<a class=author href="http://cl-informatik.uibk.ac.at/users/thiemann/">Ren&eacute; Thiemann</a>';
	$JoseD = '<a class=author href="http://www.unirioja.es/cu/jodivaso/">Jose Divas&oacute;n</a>';
	$SJ = '<a class=author href="http://sjcjoosten.nl/">Sebastiaan J.C. Joosten</a>';
	$CS = '<a class=author href="http://cl-informatik.uibk.ac.at/users/griff/">Christian Sternagel</a>';
	$KK = '<a class=author href="http://www.ct.info.gifu-u.ac.jp/~kusakari/">Keiichirou Kusakari</a>';
	$OK = '<a class=author href="http://www21.in.tum.de/~kuncar/">Ond&#345;ej Kun&#269;ar</a>';
	$AB = '<a class=author href="http://fmv.jku.at/biere/">Armin Biere</a>';
	$TK = '<a class=author href="https://staff.aist.go.jp/t.kitamura/">Takashi Kitamura</a>';
	$EC = '<a class=author href="https://staff.aist.go.jp/e.choi/">Eun-He Choi</a>';
	$CA = '<a class=author href="https://people.kth.se/~artho/">Cyrille Artho</a>';
	$SW = '<a class=author href="http://cl-informatik.uibk.ac.at/users/swinkler/">Sarah Winkler</a>';
	$AM = '<a class=author href="http://cl-informatik.uibk.ac.at/users/ami/">Aart Middeldorp</a>';
	$NH = '<a class=author href="http://www.jaist.ac.jp/~hirokawa/">Nao Hirokawa</a>';
	$GV = '<a class=author href="http://users.dsic.upv.es/~gvidal/">Germ&aacute;n Vidal</a>';
	$NN = '<a class=author href="http://www.sakabe.i.is.nagoya-u.ac.jp/~nishida/">Naoki Nishida</a>';
	$JI = '<span class=author>Jos&eacute; Iborra</span>';
	$TS = '<a class=author href="http://www.sakabe.nuie.nagoya-u.ac.jp/~sakabe/">Toshiki Sakabe</a>';
	$MS = '<a class=author href="http://www.sakabe.nuie.nagoya-u.ac.jp/~sakai/">Masahiko Sakai</a>';
	$YO = '<a class=author href="https://staff.aist.go.jp/y.oiwa/">Yutaka Oiwa</a>';
	$TH = '<a class=author href="http://www.sqlab.i.is.nagoya-u.ac.jp/~hamaguti/">Takeshi Hamaguchi</a>';
	$MB = '<a class=author href="https://www.microsoft.com/en-us/research/people/mabrocks/">Marc Brockschmidt</a>';
	$OM = '<a class=author href="http://se.is.kit.ac.jp/~o-mizuno/">Osamu Mizuno</a>';
	$MA = '<a class=author href="http://cl-informatik.uibk.ac.at/users/zini/">Martin Avanzini</a>';
	$UdL = '<a class=author href="http://www.cs.unibo.it/~dallago/">Ugo Dal Lago</a>';
	$JG = '<a class=author href="https://verify.rwth-aachen.de/giesl/">J&uuml;rgen Giesl</a>';
	$AR = '<a class=author href="http://www.lsi.upc.es/~albert/">Albert Rubio</a>';
	$JW = '<a class=author href="http://www.imn.htwk-leipzig.de/~waldmann/">Johannes Waldmann</a>';
	$DBayer = '<a class=author href="https://www.sosy-lab.org/people/beyer/">Dirk Bayer</a>';
  $Juraj = '<a class=author href="http://www.lsv.fr/~kolcak/">Juraj Kol&#269;&aacute;k</a>';
  $IH = '<a class=author href="http://group-mmm.org/~ichiro/">Ichiro Hasuo</a>';
  $JDubut = '<a class=author href="http://group-mmm.org/~dubut/">J&eacute;r&eacute;my Dubut</a>';
  $SK = '<a class=author href="http://group-mmm.org/~s-katsumata/">Shin&apos;ya Katsumata</a>';
  $DSprunger = '<a class=author href="http://group-mmm.org/~sprunger/">David Sprunger</a>';
  $NianZe = '<a class=author href="https://dblp.org/pers/hd/l/Lee:Nian=Ze">Nian-Ze Lee</a>';
  $Clovis = '<a class=author href="http://group-mmm.org/~eberhart/">Clovis Eberhart</a>';
  $Fuyuki = '<a class=author href="http://research.nii.ac.jp/~f-ishikawa/en/">Fuyuki Ishikawa</a>';
  $RalphB = '<a class=author href="http://cl-informatik.uibk.ac.at/users/bottesch/">Ralph Bottesch</a>';
  $MaxHaslbeck = '<a class=author href="http://cl-informatik.uibk.ac.at/users/mhaslbeck/">Max W. Haslbeck</a>';
  $JonasS = '<a class=author href="https://dblp.org/pers/s/Sch=ouml=pf:Jonas.html">Jonas Sch&ouml;pf</a>';
  $StefanK = '<a class=author href="https://klikovits.net/">Stefan Klikovits</a>';
	$TsutomuK = '<a class=author href="https://researchmap.jp/tsutomu.kobayashi/">Tsutomu Kobayshi</a>';
	function JAR() {
        echo "<span class=booktitle>";
		toggle( "JAR", "Journal of Automated Reasoning" );
        echo "</span>";
	}
    function Springer() {
        echo "<span class=publisher>Springer</span>";
    }
    function SCP() {
        echo "<span class=booktitle>";
        toggle("SCP", "Science of Computer Programming");
        echo "</span>";
    }
    function Elsevier() {
        echo "<span class=publisher>Elsevier</span>";
    }
?>
</head>
<body>
 <h1>YAMADA, Akihisa (山田晃久)</h1>
 <h2>Research Interests</h2>
  <ul>
   <li>Interactive Theorem Proving
   <li>Combinatorial Testing
   <li>Term Rewrite Systems: termination and complexity analysis
   <li>Satisfiability
  </ul>
 <h2>Affiliation</h2>
  <table>
   <tr>
    <th>Apr.&nbsp;2020<th>&mdash;<th>current
    <td>Senior researcher at
     <span class=institute>Infrastructure Protection Security Research Team</span>,
     <a class=institute href='https://www.cpsec.aist.go.jp/'>Cyber Physical Security Research Center</a>,
     <a class=institute href='https://www.aist.go.jp/'>AIST</a>, Japan.
   <tr>
    <th>Nov.&nbsp;2017<th>&mdash;<th>Mar.&nbsp;2020
    <td>Project assistant professor&larr;postdoc at
     <a class=institute href='http://group-mmm.org/eratommsd'>ERATO HASUO Metamathematics for Systems Design Project</a>,
     <a class=institute href='http://www.nii.ac.jp'>National Institute of Informatics (NII)</a>, Japan.
   <tr>
    <th>Apr.&nbsp;2015<th>&mdash;<th>Oct.&nbsp;2017
    <td>Postdoc at
     <a class=institute href='http://cl-informatik.uibk.ac.at/home/'>Computational Logic Group</a>,
     <a class=institute href='http://www.uibk.ac.at'>University of Innsbruck</a>, Austria.
   <tr>
    <th>May.&nbsp;2014<th>&mdash;<th>Mar.&nbsp;2016
    <td>Visiting researcher&larr;postdoc&larr;technical staff at
     <a class=institute href='http://www.aist.go.jp'>National Institute of Advanced Industiral Science (AIST)</a>, Japan.
   <tr>
    <th>Apr.&nbsp;2011<th>&mdash;<th>Sept.&nbsp;2014
    <td>Ph.D. student at
     <a class=institute href='http://www.trs.cm.is.nagoya-u.ac.jp'>Sakabe-Sakai lab.</a>,
     <a class=institute href='http://www.nagoya-u.ac.jp'>Nagoya University</a>, Japan.
   <tr>
    <th>Apr.&nbsp;2008<th>&mdash;<th>Mar.&nbsp;2011
    <td>Engineer at
     <a class=institute href='http://www.panasonic.com/jp/company/pad.html'>Panasonic Advanced Technology Development Co, Ltd.</a>
   <tr>
    <th>Apr.&nbsp;2006<th>&mdash;<th>Mar.&nbsp;2008
    <td>Master student at Sakabe-Sakai lab.
   <tr>
    <th>Apr.&nbsp;2002<th>&mdash;<th>Mar.&nbsp;2006
    <td>Bachelor student at Nagoya University.
  </table>
 <h2>Tools</h2>
  I am the developer of
  <ul>
   <li><a href='http://www.trs.cm.is.nagoya-u.ac.jp/NaTT'>the Nagoya Termination Tool</a>, and
   <li>the combinatorial testing tool Calot,
  </ul>
  and a contributor of
  <ul>
   <li><a href='http://cl-informatik.uibk.ac.at/software/ceta/'>IsaFoR/CeTA</a>
  </ul>
 <h2>Publications</h2>
  See also
  <a href='http://dblp.uni-trier.de/pers/hd/y/Yamada_0002:Akihisa'>DBLP</a>,
  <a href="https://scholar.google.com/citations?user=dB0UqC0AAAAJ&hl=en">Google Scholar</a>,
  <a href="https://www.researchgate.net/profile/Akihisa_Yamada">Research Gate</a>,
  <a href="https://researchmap.jp/akihisayamada">researchmap</a>
 <h3>Journal Articles</h3>
  <ol class=publications>
   <li>
    <?php echo "$RT, $RalphB, $JoseD, $MaxHaslbeck, $SJ, $AY" ?>:<br>
    <a class=title href="https://doi.org/10.1007/s10817-020-09552-1">Formalizing the LLL basis reduction algorithm and the LLL factorization algorithm in Isabelle/HOL</a>
    <span class=bibinfo>
     <?php JAR(); ?>
     <span class=pages>64: 827&ndash;856</span>
     <?php Springer(); ?>
     <span class=year>2020</span>.
    </span>
    <span class=note>Invited, special issue for ITP 2018.</span>
    [<a href="TBDHJY20.pdf">authors&apos; version</a>]
   <li>
    <?php echo "$MA, $UdL, $AY" ?>:<br/>
    <a class=title href="https://doi.org/10.1016/j.scico.2019.102338">On probabilistic term rewriting</a>
    <span class=bibinfo>
     <?php SCP(); ?>
     <span class=pages>185</span>,
     <?php Elsevier(); ?>.
    </span>
    <span class=note>Invited, special issue for FLOPS 2018, online.</span>
    [<a href="ADY19.pdf">authors&apos; version</a>]
   <li>
    <?php echo "$JoseD, $SJ, $RT, $AY" ?>:<br/>
    <a class=title href='https://doi.org/10.1007/s10817-019-09526-y'
    >A verified implementation of the Berlekamp–Zassenhaus factorization algorithm</a>
    <span class=bibinfo>
     <?php JAR(); ?>
     <span class=pages>64(4): 699&ndash;735</span>,
     <?php Springer(); ?>
     <span class=year>2020</span>.
    </span>
    [<a href="DJTY2019.pdf">authors&apos; version</a>]
   <li>
    <?php echo "$SJ, $RT, $AY" ?>:<br/>
    <a class=title href='https://doi.org/10.1007/s10817-018-09504-w'>A verified implementation of algebraic numbers in Isabelle/HOL</a>
    <span class=bibinfo>
     <?php JAR(); ?>
     <span class=pages>64:363&ndash;389</span>,
     <?php Springer(); ?>
     <span class=year>2020</span>.
    </span>
   <li>
    <?php echo "$JI, $NN, $GV, $AY" ?>:<br/>
    <a class=title href='http://link.springer.com/article/10.1007/s10817-016-9373-5'>Relative termination via dependency pairs</a>
    <span class=bibinfo>
     <?php JAR(); ?>
     <span class=pages>58(3):391&ndash;411</span>,
     <?php Springer(); ?>
     <span class=year>2017</span>.
    </span>
    <span class=note>Invited, special issue for CADE 2015.</span>
   <li>
    <?php echo "$AY, $SW, $NH, $AM" ?>:<br/>
    <a class=title href='http://journals.cambridge.org/abstract_S1471068415000083'>AC-KBO revisited</a>
    <span class=bibinfo>
     <span class=booktitle>
      <?php toggle( "TPLP", "Theory and Practice of Logic Programming") ?></span>
     <span class=pages>16(2):163&ndash;188</span>,
     <span class=publisher>Cambridge University Press</span>,
     <span class=year>2016</span>.
    </span>
    <span class=note>Invited, special issue for FLOPS 2014.
     Also available as
     <a href='http://arxiv.org/abs/1403.0406'>CoRR abs/1403.0406</a></span>
    <?php errata( 'In Definition 7.1, "{ t<sub>1</sub>,...,t<sub>i-1</sub>,s<sub>j</sub>,t<sub>i+1</sub>,...,t<sub>n</sub> }" should be "{ t<sub>1</sub>,...,t<sub>i-1</sub> } &#8846; &nabla;<sub>f</sub> (s<sub>j</sub>) &#8846; { t<sub>i+1</sub>,...,t<sub>n</sub> }".');
    ?>
   <li>
    <?php echo "$AY, $KK, $TS" ?>:<br/>
    <a class=title href="http://dx.doi.org/10.1016/j.scico.2014.07.009">
    A unified ordering for termination proving</a>
    <span class=bibinfo>
     <?php SCP();?>
     <span class=pages>111:110&ndash;134</span>,
     <?php Elsevier(); ?>
     <span class=year>2015</span>.
    </span>
    <span class=note>Invited, special issue for PPDP 2013.</span>
    [<a href='http://arxiv.org/abs/1404.6245/'>arXiv version</a>, <a href='https://www.trs.cm.is.nagoya-u.ac.jp/papers/SCP2014/'>expreiments</a>].
   <li>
    <?php echo "$AY, $KK, $TS, $MS, $NN" ?>:<br/>
    <a class=title href='https://www.jstage.jst.go.jp/article/ipsjtrans/5/0/5_0_96/_article/'>
     A sound type system for typing runtime errors</a>
    <span class=bibinfo>
     <span class=booktitle>IPSJ Transactions on Programming</span>
     <span class=pages>5(2):16&ndash;24</span>,
     <span class=year>2012</span>.
    </span>
    <span class=note>Awarded IPSJ Tokai-branch student paper prize for encouragement.</span>
  </ol>
 <h3>Conference Papers</h3>
  <ol class=publications start=9>
   <li>
    <?php echo "$AY"; ?>:<br>
    <a class=title href="https://doi.org/10.1007/978-3-030-79876-5_16">Multi-dimensional interpretations for termination of term rewriting</a>
    <span class=bibinfo>
    <?php event("CADE-28", "Proc. 28th International Conference on Automated Deduction", "https://www.cs.cmu.edu/~mheule/CADE28/")?>,
    <span class=series>LNAI</span>
    <span class=volume>12699</span>
    <span class=pages>pp.&nbsp;273&ndash;290</span>
    <span class=year>2021</span>
   <li>
    <?php echo "$Clovis, $AY, $StefanK, $SK, $TsutomuK, $IH, $Fuyuki"?>:<br>
    <a class=title href="https://doi.org/10.1007/978-3-030-79379-1_2">Architecture-guided test resource allocation via logic</a>
    <span class=bibinfo>
     <?php event("TAP 2021", "Proc. 15th International Conference on Tests and Proofs", "https://www.univ-orleans.fr/lifo/events/TAP2021/") ?>,
     <span class=series>LNCS</span>
     <span class=volume>12740</span>,
     <span class=pages>pp.&nbsp;22&ndash;38</span>,
     <span class=year>2021</span>
   <li>
    <?php echo "$RT, $JonasS, $CS, $AY"?>:<br/>
    <a class=title href="https://drops.dagstuhl.de/opus/volltexte/2020/12326/">Certifying the weighted path order (invited talk)</a>
    <span class=bibinfo>
     <?php event("IJCAR-FSCD 2020", "Proc. Joint 5th International Conference on Formal Structures for Computation and Deduction and 10th International Joint Conference on Automatic Reasoning", "https://fscd-ijcar-2020.org/")?>,
     <span class=series>LIPIcs</span>
     <span class=volume>167</span>,
     <span class=pages>4:1&ndash;4:20</span>,
     <span class=year>2020</span>
    </span>
   <li>
    <?php echo "$Juraj, $JDubut, $IH, $SK, $DSprunger, $AY" ?>:<br/>
    <a class=title href="https://doi.org/10.1007/978-3-030-45190-5_11">Relational differential dynamic logic</a>
    <span class=bibinfo>
     <?php event("TACAS 2020", "Proc. 26th International Conference on Tools and Algorithms for the Construction and Analysis of Systems", "https://www.etaps.org/2020/tacas") ?>,
     <span class=series>LNCS</span>
     <span class=volume>12078</span>,
     <span class=pages>pp.&nbsp;191&ndash;208</span>,
     <span class=year>2020</span>
    </span>
   <li>
    <?php echo "$AY, $JDubut" ?>:<br/>
    <a class=title href="http://dx.doi.org/10.4230/LIPIcs.ITP.2019.30">Complete non-orders and fixed points</a>
    <span class=bibinfo>
     <?php event( "ITP 2019", "Proc. 10th International Conference on Interactive Theorem Proving", "https://itp19.cecs.pdx.edu/" ) ?>,
     <span class=series>LIPIcs</span>
     <span class=volume>141</span>,
     <span class=pages>30:1&ndash;30:16</span>,
     <span class=year>2019</span>
    </span>
   <li>
    <?php echo "$DBayer et al."?>:<br/>
    <a class=title href='https://doi.org/10.1007/978-3-030-17502-3_1'>TOOLympics 2019: An overview of competitions in formal methods</a>
    <span class=bibinfo>
     <?php event( "TACAS 2019", "Proc. 25th International Conference on Tools and Algorithms for Construction and Analysis of Systems", "https://conf.researchr.org/home/tacas-2019") ?> (3),
     <span class=series>LNCS</span>
     <span class=volume>11429</span>,
     <span class=pages>pp.&nbsp;3&ndash;24</span>,
     <span class=year>2019</span>
   <li>
    <?php echo "$JG, $AR, $CS, $JW, $AY"?>:<br/>
    <a class=title href='https://doi.org/10.1007/978-3-030-17502-3_10'>The termination and complexity competition</a>
    <span class=bibinfo>
     <?php event( "TACAS 2019", "Proc. 25th International Conference on Tools and Algorithms for Construction and Analysis of Systems", "https://conf.researchr.org/home/tacas-2019") ?> (3),
     <span class=series>LNCS</span>
     <span class=volume>11429</span>,
     <span class=pages>pp.&nbsp;156&ndash;166</span>,
     <span class=year>2019</span>
   <li>
    <?php echo "$CS, $AY" ?>:<br/>
    <a class=title href='https://doi.org/10.1007/978-3-030-17462-0_15'>Reachability analysis for termination and confluence of rewriting</a>
    <span class=bibinfo>
     <?php event( "TACAS 2019", "Proc. 25th International Conference on Tools and Algorithms for Construction and Analysis of Systems", "https://conf.researchr.org/home/tacas-2019") ?> (1),
     <span class=seires>LNCS</span>
     <span class=volume>11427</span>,
     <span class=pages>pp.&nbsp;262&ndash;278</span>,
     <span class=year>2019</span>
    </span>
   <li>
    <?php echo "$JoseD, $SJ, $RT, $AY" ?>:<br/>
    <a class=title href='https://doi.org/10.1007/978-3-319-94821-8_10'>A formalization of the LLL basis reduction algorithm</a>
    <span class=bibinfo>
     <?php event( "ITP 2018", "Proc. 9th International Conference on Interactive Theorem Proving", "https://itp2018.inria.fr") ?>,
     <span class=series>LNCS</span>
     <span class=volume>10895</span>,
     <span class=pages>pp.&nbsp;160&ndash;177</span>.
     <span class=year>2018</span>
    </span>
   <li>
    <?php echo "$MA, $UdL, $AY" ?>:<br/>
    <a class=title href='https://doi.org/10.1007/978-3-319-90686-7_9'>On probabilistic term rewriting</a>
    <span class=bibinfo>
     <?php event( "FLOPS 2018", "Proc. 14th International Symposium on Functional and Logic Programming", "http://www.sqlab.jp/FLOPS2018/") ?>,
     <span class=booktitle>LNCS</span>
     <span class=volume>10818</span>,
     <span class=pages>pp.&nbsp;132&ndash;148</span>,
     <span class=year>2018</span>
    </span>
    [<a  href='ADY18.pdf'>preprint</a>]
   <li>
    <?php echo "$JoseD, $SJ, $OK, $RT, $AY" ?>:<br/>
    <a class=title href='https://dl.acm.org/citation.cfm?doid=3167103'>Efficient certification of complexity proofs: formalizing the Perron&ndash;Frobenius theorem (invited talk paper)</a>
    <span class=bibinfo>
     <?php event( "CPP 2018", "Proc. 7th ACM SIGPLAN International Conference on Certified Programs and Proofs", "https://popl18.sigplan.org/track/CPP-2018") ?>,
     <span class=pages>pp.&nbsp;2&ndash;13</span>,
     <span class=year>2018</span>.
    </span>
   <li>
    <?php echo "$TK, $AY, <span class=author>Goro Hatayama</span>, <span class=author>Shinya Sakuragi</span>, $EC, $CA" ?>:<br/>
    <a class=title href="https://doi.org/10.1007/978-3-319-66266-4_15">Classification tree method with parameter shielding</a>
    <span class=bibinfo>
     <?php event( "SAFECOMP 2017", "Proc. 36th International Conference on Computer Safety, Reliability, and Security", "http://safecomp17.fbk.eu/") ?>,
     <span class=series>LNCS</span>
     <span class=volume>10488</span>,
     <span class=pages>pp.&nbsp;230&ndash;241</span>,
     <span class=year>2017</span>.
    </span>
   <li>
    <?php echo "$MB, $SJ, $RT, $AY" ?>:<br/>
    <a class=title href="https://doi.org/10.1007/978-3-319-63046-5_28">Certifying safety and termination proofs for integer transition systems</a>
    <span class=bibinfo>
     <?php event( "CADE-26",
       "Proc. 26th International Conference on Automated Deduction",
       "http://www.cade-26.info/") ?>,
     <span class=series>LNCS</span>
     <span class=volume>10395</span>,
     <span class=pages>pp.&nbsp;451&ndash;471</span>,
     <span class=year>2017</span>.
    </span>
    [<a href="http://cl-informatik.uibk.ac.at/users/ayamada/BJTY2017.pdf">preprint</a>]
   <li>
    <?php echo "$JoseD, $SJ, $RT, $AY" ?>:<br/>
    <a class=title href="http://dl.acm.org/citation.cfm?doid=3018610.3018617">A formalization of the Berlekamp&ndash;Zassenhaus factorization algorithm</a>
    <span class=bibinfo>
     <?php event( "CPP 2017",
      "Proc. 6th ACM SIGPLAN Conference on Certified Programs and Proofs",
      "http://cpp2017.mpi-sws.org/" ) ?>,
     <span class=pages>pp.&nbsp;17&ndash;29</span>,
     <span class=year>2017</span>.
    </span>
   <li>
    <?php echo "$EC, $CA, $TK, $OM, $AY" ?>:<br/>
    <a class=title href="https://doi.org/10.1109/ISSRE.2016.26">Distance-integrated combinatorial testing</a>
    <span class=bibinfo>
     <?php event( "ISSRE 2016",
      "Proc. 27th International Symposium on Software Reliability Engineering",
      "http://issre.net/" ) ?>,
     <span class=pages>pp.&nbsp;93&ndash;104</span>,
     <span class=year>2016</span>.
    </span>
    [<a href="http://deji.dip.jp/pman/pman3.cgi?D=48">preprint</a>]
   <li>
    <?php echo "$AY, $AB, $CA, $TK, $EC" ?>:<br/>
    <a class=title href="https://doi.org/10.1145/2970276.2970335">Greedy combinatorial test case generation using unsatisfiable cores</a>
    <span class=bibinfo>
     <?php event( "ASE 2016",
      "Proc. 31st IEEE/ACM International Conference on Automated Software Engineering",
      "http://www.ase2016.org/" ) ?>,
     <span class=pages>pp.&nbsp;614&ndash;624</span>,
     <span class=year>2016</span>.
    </span>
    [<a href="http://cl-informatik.uibk.ac.at/users/ayamada/YBAKC2016.pdf">preprint</a>]
   <li>
    <?php echo "$AY, $CS, $RT, $KK" ?>:<br/>
    <a class=title href='http://dx.doi.org/10.4230/LIPIcs.CSL.2016.8'>AC dependency pairs revisited</a>
    <span class=bibinfo>
     <?php event( "CSL 2016",
      "Proc. 25th EACSL Annual Conference on Computer Science Logic",
      "http://csl16.lif.univ-mrs.fr/" ) ?>,
     <span class=series>LIPIcs</span>
     <span class=volume>62</span>,
     <span class=pages>pp.&nbsp;8:1&ndash;8:16</span>,
     <span class=year>2016</span>.
    </span>
   <li>
    <?php echo "$RT, $AY" ?>:<br/>
    <a class=title href="https://doi.org/10.1007/978-3-319-43144-4_24">Algebraic numbers in Isabelle/HOL</a>
    <span class=bibinfo>
     <?php event( "ITP 2016",
      "Proc. 7th International Conference on Interactive Theorem Proving",
      "https://itp2016.inria.fr/") ?>,
     <span class=series>LNCS</span>
     <span class=volume>9807</span>,
     <span class=pages>pp.&nbsp;391&ndash;408</span>,
     <span class=year>2016</span>.
    </span>
    [<a href="http://cl-informatik.uibk.ac.at/users/ayamada/TY2016.pdf">preprint</a>]
   <li>
    <?php echo "$RT, $AY" ?>:<br/>
    <a class=title href="https://doi.org/10.1145/2854065.2854073">Formalizing Jordan normal forms in Isabelle/HOL</a>
    <span class=bibinfo>
     <?php event( "CPP 2016",
      "Proc. 5th ACM SIGPLAN Conference on Certified Programs and Proofs",
      "https://people.csail.mit.edu/adamc/cpp16/" ) ?>,
     <span class=pages>pp.&nbsp;88&ndash;99</span>.
    </span>
   <li>
    <?php echo "$TK, $AY, <span class=author>Goro Hatayama</span>, $CA, $EC, <span class=author>Ngoc Thi Bich Do</span>, $YO, <span class=author>Shinya Sakuragi</span>:" ?><br/>
    <a class=title href="https://doi.org/10.1109/QRS.2015.29">Combinatorial testing for tree-structured test models with constraints</a>
    <span class=bibinfo>
     <?php event( "QRS 2015",
      "Proc. 2015 IEEE International Conference on Software Quality, Reliability &amp; Security",
      "http://paris.utdallas.edu/qrs15/" ) ?>,
      <span class=pages>pp.&nbsp;141&ndash;150</span>.
    </span>
    <span class=note>Best paper award!</span>
    [<a href="https://staff.aist.go.jp/t.kitamura/dl/QRS2015.pdf">preprint</a>]
   <li>
    <?php echo "$JI, $NN, $GV, $AY" ?>:<br/>
    <a class=title href="https://doi.org/10.1007/978-3-319-21401-6_11">Reducing relative termination to dependency pair problems</a>
    <span class=bibinfo>
     <?php event(  "CADE-25",
      "Proc. 25th International Conference on Automated Deduction",
      "http://conference.mi.fu-berlin.de/cade-25/" ) ?>,
     <span class=series>LNCS (LNAI)</span>
     <span class=volume>9195</span>,
     <span class=pages>pp.&nbsp;163&ndash;178</span>,
     2015.
    </span>
    [<a href="http://www.trs.cm.is.nagoya-u.ac.jp/papers/CADE2015/paper.pdf">preprint</a>,
     <a href="http://www.trs.cm.is.nagoya-u.ac.jp/papers/CADE2015">experiments</a>]
    <?php errata('In Definition 3, &#8827;<sub>R/B</sub> should be defined as (&rarr;<sub>R/B</sub>&middot;&#8885;)<sup>+</sup>, rather than (&rarr;<sub>R/B</sub>&cup;&#8883;)<sup>+</sup>, but then more workaround is required. Please see JAR version for more elegant solution.') ?>,
   <li>
    <?php echo "$EC, $TK, $CA, $AY, $YO" ?>:<br/>
    <a class=title href="https://doi.org/10.1109/COMPSAC.2015.113">Priority integration for weighted combinatorial testing</a>
    <span class=bibinfo>
     <?php event( "COMPSAC 2015",
      "Proc. 39th Annual International Computers, Software &amp; Applications Conference",
      "http://www.computer.org/web/COMPSAC/" ) ?>,
     <span class=pages>pp.&nbsp;242&ndash;247</span>,
     <span class=year>2015</span>.
    </span>
   <li>
    <?php echo "$AY, $TK, $CA, $EC, $YO, $AB" ?>:<br/>
    <a class=title href="https://doi.org/10.1109/ICST.2015.7102599">Optimization of combinatorial testing by incremental SAT solving</a>
    <span class=bibinfo>
     <?php event( "ICST 2015",
      "Proc. 8th IEEE International Conference on Software Testing, Verification, and Validation",
      "http://icst2015.ist.tu-graz.ac.at/" ) ?>,
     <span class=pages>pp.&nbsp;1&ndash;10</span>,
     <span class=year>2015</span>.
    </span>
    [<a href="http://www.trs.cm.is.nagoya-u.ac.jp/~ayamada/YKACOB2015.pdf">preprint</a>]
   <li>
    <?php echo "$AY, $KK, $TS" ?>:<br/>
    <a class=title href="https://doi.org/10.1007/978-3-319-08918-8_32">Nagoya Termination Tool</a>
    <span class=bibinfo>
     <?php event( "RTA-TLCA 2014",
     "Proc. Joint 25th International Conference on Rewriting Techniques and Applications and 12th International Conference on Typed Lambda Calculi and Applications",
     "http://vsl2014.at/rta-tlca" ) ?>,
     <span class=series>LNCS</span>
     <span class=volume>8560</span>,
     <span class=pages>pp.&nbsp;466&ndash;475</span>,
     <span class=year>2014</span>.
    </span>
    [<a href="http://www.trs.cm.is.nagoya-u.ac.jp/papers/RTA-TLCA2014/paper.pdf">preprint</a>,
     <a href='http://arxiv.org/abs/1404.6626/'>full version</a>]
    <?php errata( 'In p.472 line 2, "reset" should be removed from here; it is not specified in SMT-LIB 2.0, but a command supported by z3.'); ?>
   <li>
    <?php echo "$AY, $SW, $NH, $AM" ?>:<br/>
    <a class=title href="https://doi.org/10.1007/978-3-319-07151-0_20">AC-KBO revisited</a>
    <span class=bibinfo>
     <?php event( "FLOPS 2014",
      "Proc. 12th International Symposium on Functional and Logic Programming",
      "http://www.jaist.ac.jp/flops2014/" ) ?>,
     <span class=series>LNCS</span>
     <span class=volume>8475</span>,
     <span class=pages>pp.&nbsp;319&ndash;335</span>,
     <span class=year>2014</span>.
     <span class=note>Superseded by the TPLP article.</span>
    </span>
    [<a href="http://www.trs.cm.is.nagoya-u.ac.jp/~ayamada/FLOPS2014/paper.pdf">preprint</a>,
     <a href="http://cl-informatik.uibk.ac.at/software/ackbo">experiments</a>]
   <li>
    <?php echo "$AY, $KK, $TS" ?>:<br/>
    <a class=title href="https://doi.org/10.1145/2505879.2505885">
     Unifying the Knuth-Bendix, recursive path and polynomial orders</a>
    <span class=bibinfo>
     <?php event( "PPDP 2013",
      "Proc. 15th International Symposium on Principles and Practice of Declarative Programming",
      "https://people.cs.kuleuven.be/~tom.schrijvers/PPDP2013/" ) ?>,
     <span class=pages>pp.&nbsp;181&ndash;192</span>,
     <span class=year>2013</span>.
    </span>
    [<a href="http://www.trs.cm.is.nagoya-u.ac.jp/papers/PPDP2013/paper.pdf">preprint</a>,
     <a href="http://www.trs.cm.is.nagoya-u.ac.jp/papers/PPDP2013/">experiments</a>]
  </ol>
 <h3>Theses</h3>
  <ul class=publications>
   <li>
    <a href='http://www.trs.cm.is.nagoya-u.ac.jp/~ayamada/thesis.pdf' class=title>The weighted path order for termination of term rewriting</a>
    <span class=bibinfo>
     <span class=booktitle>Ph.D. thesis</span>,
     <span class=institute>Graduate School of Information Science, Nagoya University</span>,
     <span class=year>2014</span>.
    </span>
   </li>
   <li>
    <a href='http://www.trs.cm.is.nagoya-u.ac.jp/~ayamada/master.pdf' class=title>An extension of soft typing for static detection of runtime type errors</a>
    <span class=bibinfo>
     <span class=booktitle>Master's thesis</span>,
     <span class=institute>Graduate School of Information Science, Nagoya University</span>,
     <span class=year>2008</span>.
    </span>
   </li>
   <li>
    <a href='http://www.trs.cm.is.nagoya-u.ac.jp/~ayamada/bachelor.pdf' class=title>On termination proving of higher order rewrite systems by transformations</a>
    (<?php toggle( "in Japanese", "高階書換え系の変換による停止性証明法に関する研究") ?>).
    <span class=bibinfo>
     <span class=booktitle>Bachelor's thesis</span>,
     <span class=institute>School of Engineering, Nagoya University</span>,
     <span class=year>2006</span>.
    </span>
  </ul>
 <h3>Workshop Papers / Others <?php hider("hider1", "others", "...", "&lt;&lt;&lt;", "Show", "Hide");?></h3>
  <ul class=publications id=others>
   <li>
    <?php echo "$Juraj, $IH, $JDubut, $SK, $DSprunger, $AY" ?>:
    <span class=title>Relational differential dynamic logic: poster abstract</span>.
    <?php event( "HSCC 2019", "22nd ACM International Conference on Hybrid Systems: Computation and Control", "http://hscc2019.eecs.umich.edu/" ) ?>,
    <span class=pages>284&ndash;285</span>,
    <span class=year>2019</span>
   <li>
    <?php echo "$AY, $Clovis, $Fuyuki, $NianZe" ?>:
    <span class=title>Scenario sampling for cyber physical systems using combinatorial testing</span>.
    Poster presentation in
    <?php event( "IWCT 2019", "8th International Workshop on Combinatorial Testing", "https://iwct2019.sba-research.org/" ) ?>,
    <span class=year>2019</span>.
    [<a href="YEIL2019.pdf">abstract</a>]
   <li>
    <span class=title>Formalizing cyber physical systems in Isabelle/HOL</span>.
    <a class=event href="https://www.jst.go.jp/kisoken/crest/math-challenge2019/">若手数学者交流会</a>
    <span class=year>2019</span>.
   <li>
    <span class=title>Weighted rewriting</span>.
    <a class=event href="trs50">50th TRS meeting</a>
    <span class=year>2019</span>.
    [<a href="wars.pdf">Slides</a>]
   <li>
    <span class=title>Relational differential dynamic logic</span>.
    <a class=event href="http://www.cs.gunma-u.ac.jp/~fujita/TRS49/trs49.html">49th TRS meeting</a>
    <span class=year>2018</span>.
   <li>
    <a class=title href='wst2018.pdf'>Towards unified method for termination</a>
	<?php event( "WST 2018", "16th International Workshop on Termination", "http://wst2018.webs.upv.es/" ) ?>,
	<span class=pages>pp.&nbsp;2&ndash;6</span>,
	<span class=year>2018</span>.
	<span class=note>invited talk</span>
   <li>
	<?php echo "$JoseD, $SJ, $RT, $AY" ?>:<br/>
	<span class=title>A Perron-Frobenius theorem for Jordan blocks for complexity proving</span>.
	<?php event( "WST 2018", "16th International Workshop on Termination", "http://wst2018.webs.upv.es/" ) ?>,
	<span class=pages>pp.&nbsp;30&ndash;34</span>,
	<span class=year>2018</span>.
   <li>
    <?php echo "$MA, $UdL, $AY" ?>:<br/>
    <span class=title>The interpretation method for probabilistic systems</span>. 
    <?php event( "DICE 2018", "9th International Workshop on Developments in Implicit Computational Complexity", "http://cl-informatik.uibk.ac.at/users/zini/events/dice18/") ?>,
    @ <a class=event href='https://www.etaps.org/'>ETAPS</a>
    <span class=year>2018</span>.
   <li>
    <span class=title>On probabilistic term rewriting</span>.
    <a class=event href='http://www.nue.ie.niigata-u.ac.jp/events/trs-meeting-48/'>48th TRS Meeting</a>
    <span class=year>2018</span>.
   <li>
    <span class=title>AC dependency pairs and more</span>.
    <a class=event href='http://www.cis.shimane-u.ac.jp/~munehiro/trs-meeting47/'>47th TRS Meeting</a>
    <span class=year>2017</span>.
   <li>
    <span class=title>Isabelle/HOL による証明とプログラミング</span>.
    <a class=event href='http://ppl.jssst.or.jp/?ss2017'>PPL サマースクール</a>
    <span class=year>2017</span>
   <li>
    <span class=title>Reachability for termination</span>.
    <a class=event href='http://cl-informatik.uibk.ac.at/events/ajsw-2016/'>4th Austria&ndash;Japan Summer Workshop on Term Rewriting (45th TRS meeting)</a>
    <span class=year>2016</span>. [<a href='http://cl-informatik.uibk.ac.at/~ayamada/AJSW2016-slides.pdf'>slides</a>]
   <li>
    <span class=title>TermComp 2016 participant: NaTT</span>.
    <span class=bibinfo>
     <?php event( "WST 2016",
      "15th International Workshop on Termination",
      "http://cl-informatik.uibk.ac.at/events/wst-2016/") ?>,
     <span class=pages>p.&nbsp;25:1</span>,
     <span class=year>2016</span>.
    </span>
   <li>
    <?php echo "$SJ, $RT, $AY" ?>:<br/>
    <span class=title>CeTA &ndash; Certifying termination and complexity proofs in 2016</span>.
    <span class=bibinfo>
     <?php event( "WST 2016",
      "15th International Workshop on Termination",
      "http://cl-informatik.uibk.ac.at/events/wst-2016/") ?>,
     <span class=pages>p.&nbsp;20:1</span>,
     <span class=year>2016</span>.
    </span>
   <li>
    <?php echo "$MB, $SJ, $RT, $AY" ?>:<br/>
    <span class=title>Certifying safety and termination proofs for integer transition systems</span>.
    <span class=bibinfo>
     <?php event( "WST 2016",
      "15th International Workshop on Termination",
      "http://cl-informatik.uibk.ac.at/events/wst-2016/") ?>,
     <span class=pages>pp.&nbsp;4:1&ndash;4:5</span>,
     <span class=year>2016</span>.
    </span>
   <li>
    <?php echo "$JoseD, $SJ, $OK, $RT, $AY" ?>:<br/>
    <span class=title>Certifying exact complexity bounds for matrix interpretations</span>.
    <?php event( "LCC 2016",
     "16th International Workshop on Logic and Computational Complexity",
     "http://lcc2016.cs.unibo.it/" ) ?>.
   <li>
    <?php echo "$JoseD, $SJ, $RT, $AY:" ?><br/>
    <a class=title href='http://www.in.tum.de/~nipkow/Isabelle2016/Isabelle2016_6.pdf'>A formalization of Berlekamp's factorization algorithm</a>
    <a class=event href='http://www21.in.tum.de/~nipkow/Isabelle2016/'>Isabelle Workshop 2016</a>
   <li>
    <?php echo "$JoseD, $OK, $RT, $AY" ?>:<br/>
    <a class=title href='https://www.isa-afp.org/entries/Perron_Frobenius.shtml'>Perron-Frobenius theorem for spectral radius analysis</a>
    <span class=bibinfo>
     <span class=booktitle>Archive of Formal Proofs</span>,
     <span class=year>2016</span>
     <span class=note>Formal proof development</span>.
    </span>
   <li>
    <?php echo "$RT, $AY" ?>:<br/>
    <a class=title href='http://www.isa-afp.org/entries/Polynomial_Interpolation.shtml'>Polynomial interpolation</a>
    <span class=bibinfo>
     <span class=booktitle>Archive of Formal Proofs</span>,
     <span class=year>2016</span>
     <span class=note>Formal proof development</span>.
    </span>
   <li>
    <?php echo "$RT, $AY" ?>:<br/>
    <a class=title href='http://www.isa-afp.org/entries/Polynomial_Factorization.shtml'>Polynomial factorization</a>
    <span class=bibinfo>
     <span class=booktitle>Archive of Formal Proofs</span>,
     <span class=year>2016</span>
     <span class=note>Formal proof development</span>.
    </span>
   <li>
    <?php echo "$RT, $AY" ?>:<br/>
    <a class=title href='http://afp.sourceforge.net/entries/Algebraic_Numbers.shtml'>Algebraic numbers in Isabelle/HOL</a>
    <span class=bibinfo>
     <span class=booktitle>Archive of Formal Proofs</span>,
     <span class=year>2015</span>
     <span class=note>Formal proof development</span>.
    </span>
   <li>
    <?php echo "$RT, $AY" ?>:<br/>
    <a class=title href='http://afp.sf.net/entries/Jordan_Normal_Form.shtml'>Matrices, Jordan normal forms, and spectral radius theory</a>
    <span class=bibinfo>
     <span class=booktitle>Archive of Formal Proofs</span>,
     <span class=year>2015</span>
     <span class=note>Formal proof development</span>.
    </span>
   <li>
    <?php echo "<span class=author>Takanori Omae</span>, $KK, $AY, $TS" ?>:<br/>
    <span class=title>Abstracting the weighted path order for proving termination of term rewriting systems</span>
    (<?php toggle("in Japanese", "項書換え系の停止性証明のための重み付き経路順序の抽象化") ?>).
    <span class=bibinfo>
     <span class=event>LA Symposium, 2014 Winter</span>,
     <span class=year>2015</span>.
    </span>
   <li>
    <?php echo "<span class=author>Koichi Ota</span>, $TH, $MS, $AY, $NN, $TS" ?>:<br/>
    <span class=title>Implementing a conditional dependency pair method for proving termination of functional programs with exception handling</span>
    (<?php toggle("in Japanese","例外処理を含む関数型プログラムの停止性証明のための条件付き依存対法の実現") ?>).
    <span class=bibinfo>
     <span class=booktitle>IEICE Technical Report SS2014-42</span>,
     <span class=pages>Vol.&nbsp;114, No.&nbsp;416, pp.&nbsp;55-60</span>,
     <span class=year>2015</span>.
    </span>
   <li>
    <span class=title>SAT solvers in combinatorial testing</span>.
    <span class=bibinfo>
     <a class=event href='http://www.math.s.chiba-u.ac.jp/~neguchi/42trsmeeting/'>
      42nd TRS meeting</a>,
     <span class=place>Tokyo, Japan</span>,
     <span class=month>February</span>
     <span class=year>2015</span>.
    </span>
   <li>
    <?php echo "$AY, $TK" ?>:<br/>
    <span class=bibinfo>
     <span class=title>Towards developing the combinatorial testing tool Calot</span>
     (<?php toggle("in Japanese","組み合わせテストツール Calot の開発に向けて") ?>).
    </span>
    <span class=bibinfo>
     <span class=booktitle>
      <a href='http://wws.sigse.jp/2015/'>IPSJ SIGSE Winter Workshop 2015 in Ginowan</a></span>,
     <span class=pages>pp.&nbsp;53&ndash;54</span>
     <span class=month>January</span>
     <span class=year>2015</span>.
    </span>
   <li>
    <?php echo "$EC, $TK, $CA, $AY, $YO" ?>:<br/>
    <span class=title>T-wise test construction improving (T+1)-way coverage</span>.
    <span class=bibinfo>
     Poster Presentation in
     <?php event( "IWESEP 2014",
      "6th International Workshop of Software Engineering in Practice",
      "http://iwesep2014.naist.jp/" ) ?>,
     <span class=month>November</span>
     <span class=year>2014</span>.
    </span>
   <li>
    <span class=title>SAT solvers and combinatorial testing</span>
    (<?php toggle("in Japanese","SATソルバと組み合わせテスト") ?>).
    <span class=bibinfo>
     <a class=event href='http://ses.sigse.jp/2014/workshop.html#ws2'>Formal Methods Workshop</a>
     @
     <a class=event href='http://ses.sigse.jp/2014/'>IPSJ Software Engineering Symposium (SES 2014)</a>,
     <span class=month>September</span>
     <span class=year>2014</span>.
    </span>
   </li>
   <li>
    <span class=title>Towards dependency pairs for relative termination</span>.
    <span class=bibinfo>
     <a class=event href='http://www.pu-toyama.ac.jp/IS/MN/trsmeeting40.html'>40th TRS meeting</a>,
     <span class=place>Unazuki, Japan</span>,
     <span class=month>March</span>
     <span class=year>2014</span>.
    </span>
   <li>
    <?php echo "$AY, $KK, $TS" ?>:<br/>
    <a class=title href='http://www.trs.cm.is.nagoya-u.ac.jp/papers/WST2013/paper.pdf'>Partial status for KBO</a>
    <span class=bibinfo>
     <?php event( "WST 2013",
      "Proc. 13th International Workshop on Termination",
      "http://www.imn.htwk-leipzig.de/WST2013/" ) ?>,
      <span class=pages>pp.&nbsp;74&ndash;78</span>,
     <span class=year>2013</span>.
     <a href='http://www.trs.cm.is.nagoya-u.ac.jp/papers/WST2013/'>Experiments</a>
    </span>
   <li>
    <span class=title>Unifying KBO, LPO and polynomial orders</span>.
    <span class=bibinfo>
     <a class=event href='http://www.trs.cm.is.nagoya-u.ac.jp/event/38thTRSmeeting/'>38th TRS meeting</a>,
     <span class=place>Kofu, Japan</span>,
     <span class=month>April</span>
     <span class=year>2013</span>.
    </span>
   <li>
    <span class=title>On AC-compatible Knuth-Bendix orderings</span>.
    <span class=bibinfo>
     <a class=event href='http://www.nue.riec.tohoku.ac.jp/trs-meeting12/'>37th TRS meeting</a>,
     <span class=place>Sendai, Japan</span>,
     <span class=month>November</span>
     <span class=year>2012</span>.
    </span>
    <span class=note>Joint work with Sarah Winkler, Nao Hirokawa, Aart Middeldorp</span>
   <li>
    <?php echo "$AY, $KK, $TS, $MS, $NN" ?>:<br/>
    <span class=title>A sound type system for typing runtime errors</span>.
    <span class=bibinfo>
     <span class=event>86th Workshop of <a href='http://www.ipsj.or.jp/sig/pro/'>IPSJ SIGPRO</a></span>,
     <span class=place>Yokohama, Japan</span>,
     <span class=month>November</span>
     <span class=year>2011</span>.
    </span>
   <li>
    <?php echo "$AY, $KK, $TS, $MS, $NN" ?>:<br/>
    <span class=bibinfo>
     <span class=title>Error detection with soft typing for dynamically typed languages</span>.
    </span>
    <span class=bibinfo>
     <span class=event><a href='http://www.washi.cs.waseda.ac.jp/sigss/'>IEICE SIGSS</a></span>,
     <span class=place>Nagasaki, Japan</span>,
     <span class=month>March</span>
     <span class=year>2008</span>.
    </span>
  </ul>
 <h2>E-mail</h2>
  akihisa.yamada<b>&lt;at&gt;</b>aist.go.jp
</body>
<script>
document.getElementById("hider1").click();
</script>
</html>
