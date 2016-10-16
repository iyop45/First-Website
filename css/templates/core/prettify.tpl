{strip}
/* desert scheme ported from vim to google prettify */
.prettyprint { display: block; background-color: #333; padding: 10px }
.prettyprint .nocode { background-color: none; color: #000 }
.prettyprint .str { color: #ffa0a0 } /* string  - pink */
.prettyprint .kwd { color: #f0e68c; font-weight: bold }
.prettyprint .com { color: #87ceeb } /* comment - skyblue */
.prettyprint .typ { color: #98fb98 } /* type    - lightgreen */
.prettyprint .lit { color: #cd5c5c } /* literal - darkred */
.prettyprint .pun { color: #fff }    /* punctuation */
.prettyprint .pln { color: #fff }    /* plaintext */
.prettyprint .tag { color: #f0e68c; font-weight: bold } /* html/xml tag    - lightyellow */
.prettyprint .atn { color: #bdb76b; font-weight: bold } /* attribute name  - khaki */
.prettyprint .atv { color: #ffa0a0 } /* attribute value - pink */
.prettyprint .dec { color: #98fb98 } /* decimal         - lightgreen */

/* Specify class=linenums on a pre to get line numbering */
ol.linenums { margin-top: 0; margin-bottom: 0; color: #AEAEAE } /* IE indents via margin-left */
li.L0,li.L1,li.L2,li.L3,li.L5,li.L6,li.L7,li.L8 { list-style-type: none }
/* Alternate shading for lines */
li.L1,li.L3,li.L5,li.L7,li.L9 { }

@media print {
  .prettyprint { background-color: none }
  .prettyprint .str, code .str { color: #060 }
  .prettyprint .kwd, code .kwd { color: #006; font-weight: bold }
  .prettyprint .com, code .com { color: #600; font-style: italic }
  .prettyprint .typ, code .typ { color: #404; font-weight: bold }
  .prettyprint .lit, code .lit { color: #044 }
  .prettyprint .pun, code .pun { color: #440 }
  .prettyprint .pln, code .pln { color: #000 }
  .prettyprint .tag, code .tag { color: #006; font-weight: bold }
  .prettyprint .atn, code .atn { color: #404 }
  .prettyprint .atv, code .atv { color: #060 }
}
{/strip}