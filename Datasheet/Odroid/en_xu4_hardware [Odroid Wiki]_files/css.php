/* START screen styles */
/* XXXXXXXXX /lib/styles/screen.css XXXXXXXXX */
/**
 * Basic screen styles. These styles are needed for basic DokuWiki functions
 * regardless of the used template. Templates can override them of course
 */
/* messages with msg() */
/* /@media END screen styles */
/* START rest styles */
/* XXXXXXXXX /lib/styles/all.css XXXXXXXXX */
/**
 * Basic screen and print styles. These styles are needed for basic DokuWiki functions
 * regardless of the used template. Templates can override them of course
 */
/* one of the many clearfix versions */
/* image alignment */
/* table cell alignment */
/* underline */
/* XXXXXXXXX /lib/plugins/pagelist/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/pagelist/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/acl/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/acl/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/info/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/info/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/upgrade/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/upgrade/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/authad/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/authad/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/xbr/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/xbr/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/backup/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/backup/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/usermanager/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/usermanager/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/styling/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/styling/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/conflictmerger/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/conflictmerger/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/plantuml/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/plantuml/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/revert/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/revert/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/authldap/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/authldap/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/include/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/include/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/searchformgoto/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/searchformgoto/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/popularity/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/popularity/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/safefnrecode/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/safefnrecode/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/wrap/all.css XXXXXXXXX */
/********************************************************************
Screen and Print Styles for the Wrap Plugin
********************************************************************/
/* resetting the box model to something more sane makes life a whole lot easier */
/* tables in columns and boxes should span the whole width */
/* emulate a headline */
/* emulate a bigger headline with a bottom border */
/* different bigger headline for safety notes */
/* change border colour of emulated headlines inside boxes to something more neutral
   (to match all the different background colours) */
/* real headlines should not be indented inside a wrap */
/* columns
********************************************************************/
/*____________ CSS3 columns  ____________*/
/* widths
********************************************************************/
/* show full width on smaller screens (mobile, etc) */
/* /@media */
/* alignments
********************************************************************/
/* box
********************************************************************/
/* see styles for boxes and notes with icons in style.css */
/*____________ rounded corners ____________*/
/* (only for modern browsers) */
/* mark
********************************************************************/
/* see styles for highlighted text in style.css */
/* miscellaneous
********************************************************************/
/*____________ indent ____________*/
/*____________ outdent ____________*/
/*____________ word wrapping in pre ____________*/
/*____________ spoiler ____________*/
/* see rest of spoiler styles in style.css */
/*____________ clear float ____________*/
/*____________ hide ____________*/
/* XXXXXXXXX /lib/plugins/wrap/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/authpgsql/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/authpgsql/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/authplain/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/authplain/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/config/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/config/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/extension/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/extension/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/tag/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/tag/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/authmysql/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/authmysql/all.less XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/swiftmail/all.css XXXXXXXXX */
/* XXXXXXXXX /lib/plugins/swiftmail/all.less XXXXXXXXX */
/* XXXXXXXXX /conf/userall.css XXXXXXXXX */
/* XXXXXXXXX /conf/userall.less XXXXXXXXX */
/* END rest styles */
/* START print styles */
/* XXXXXXXXX /lib/styles/print.css XXXXXXXXX */
/**
 * Basic print styles. These styles are needed for basic DokuWiki functions
 * regardless of the used template. Templates can override them of course
 */
/* /@media END print styles */
@media screen {
  a.interwiki {
    background: transparent url(/dokuwiki/lib/images/interwiki.png) 0px 1px no-repeat;
    padding: 1px 0px 1px 16px;
  }
  a.iw_wp {
    background-image: url(/dokuwiki/lib/images/interwiki/wp.gif);
  }
  a.iw_wpfr {
    background-image: url(/dokuwiki/lib/images/interwiki/wpfr.gif);
  }
  a.iw_wpde {
    background-image: url(/dokuwiki/lib/images/interwiki/wpde.gif);
  }
  a.iw_wpes {
    background-image: url(/dokuwiki/lib/images/interwiki/wpes.gif);
  }
  a.iw_wppl {
    background-image: url(/dokuwiki/lib/images/interwiki/wppl.gif);
  }
  a.iw_wpjp {
    background-image: url(/dokuwiki/lib/images/interwiki/wpjp.gif);
  }
  a.iw_wpmeta {
    background-image: url(/dokuwiki/lib/images/interwiki/wpmeta.gif);
  }
  a.iw_doku {
    background-image: url(/dokuwiki/lib/images/interwiki/doku.gif);
  }
  a.iw_amazon {
    background-image: url(/dokuwiki/lib/images/interwiki/amazon.gif);
  }
  a.iw_amazon_de {
    background-image: url(/dokuwiki/lib/images/interwiki/amazon.de.gif);
  }
  a.iw_amazon_uk {
    background-image: url(/dokuwiki/lib/images/interwiki/amazon.uk.gif);
  }
  a.iw_paypal {
    background-image: url(/dokuwiki/lib/images/interwiki/paypal.gif);
  }
  a.iw_phpfn {
    background-image: url(/dokuwiki/lib/images/interwiki/phpfn.gif);
  }
  a.iw_skype {
    background-image: url(/dokuwiki/lib/images/interwiki/skype.gif);
  }
  a.iw_user {
    background-image: url(/dokuwiki/lib/images/interwiki/user.png);
  }
  a.iw_callto {
    background-image: url(/dokuwiki/lib/images/interwiki/callto.gif);
  }
  a.iw_tel {
    background-image: url(/dokuwiki/lib/images/interwiki/tel.gif);
  }
  .mediafile {
    background: transparent url(/dokuwiki/lib/images/fileicons/file.png) 0px 1px no-repeat;
    padding-left: 18px;
    padding-bottom: 1px;
  }
  .mf_png {
    background-image: url(/dokuwiki/lib/images/fileicons/png.png);
  }
  .mf_xml {
    background-image: url(/dokuwiki/lib/images/fileicons/xml.png);
  }
  .mf_css {
    background-image: url(/dokuwiki/lib/images/fileicons/css.png);
  }
  .mf_c {
    background-image: url(/dokuwiki/lib/images/fileicons/c.png);
  }
  .mf_gz {
    background-image: url(/dokuwiki/lib/images/fileicons/gz.png);
  }
  .mf_h {
    background-image: url(/dokuwiki/lib/images/fileicons/h.png);
  }
  .mf_php {
    background-image: url(/dokuwiki/lib/images/fileicons/php.png);
  }
  .mf_odt {
    background-image: url(/dokuwiki/lib/images/fileicons/odt.png);
  }
  .mf_diff {
    background-image: url(/dokuwiki/lib/images/fileicons/diff.png);
  }
  .mf_java {
    background-image: url(/dokuwiki/lib/images/fileicons/java.png);
  }
  .mf_doc {
    background-image: url(/dokuwiki/lib/images/fileicons/doc.png);
  }
  .mf_rtf {
    background-image: url(/dokuwiki/lib/images/fileicons/rtf.png);
  }
  .mf_webm {
    background-image: url(/dokuwiki/lib/images/fileicons/webm.png);
  }
  .mf_sxw {
    background-image: url(/dokuwiki/lib/images/fileicons/sxw.png);
  }
  .mf_odc {
    background-image: url(/dokuwiki/lib/images/fileicons/odc.png);
  }
  .mf_odg {
    background-image: url(/dokuwiki/lib/images/fileicons/odg.png);
  }
  .mf_htm {
    background-image: url(/dokuwiki/lib/images/fileicons/htm.png);
  }
  .mf_cpp {
    background-image: url(/dokuwiki/lib/images/fileicons/cpp.png);
  }
  .mf_ogg {
    background-image: url(/dokuwiki/lib/images/fileicons/ogg.png);
  }
  .mf_tar {
    background-image: url(/dokuwiki/lib/images/fileicons/tar.png);
  }
  .mf_odf {
    background-image: url(/dokuwiki/lib/images/fileicons/odf.png);
  }
  .mf_ppt {
    background-image: url(/dokuwiki/lib/images/fileicons/ppt.png);
  }
  .mf_pdf {
    background-image: url(/dokuwiki/lib/images/fileicons/pdf.png);
  }
  .mf_hpp {
    background-image: url(/dokuwiki/lib/images/fileicons/hpp.png);
  }
  .mf_sxi {
    background-image: url(/dokuwiki/lib/images/fileicons/sxi.png);
  }
  .mf_jpeg {
    background-image: url(/dokuwiki/lib/images/fileicons/jpeg.png);
  }
  .mf_csh {
    background-image: url(/dokuwiki/lib/images/fileicons/csh.png);
  }
  .mf_tgz {
    background-image: url(/dokuwiki/lib/images/fileicons/tgz.png);
  }
  .mf_odp {
    background-image: url(/dokuwiki/lib/images/fileicons/odp.png);
  }
  .mf_zip {
    background-image: url(/dokuwiki/lib/images/fileicons/zip.png);
  }
  .mf_gif {
    background-image: url(/dokuwiki/lib/images/fileicons/gif.png);
  }
  .mf_docx {
    background-image: url(/dokuwiki/lib/images/fileicons/docx.png);
  }
  .mf_html {
    background-image: url(/dokuwiki/lib/images/fileicons/html.png);
  }
  .mf_xlsx {
    background-image: url(/dokuwiki/lib/images/fileicons/xlsx.png);
  }
  .mf_rb {
    background-image: url(/dokuwiki/lib/images/fileicons/rb.png);
  }
  .mf_js {
    background-image: url(/dokuwiki/lib/images/fileicons/js.png);
  }
  .mf_ico {
    background-image: url(/dokuwiki/lib/images/fileicons/ico.png);
  }
  .mf_rar {
    background-image: url(/dokuwiki/lib/images/fileicons/rar.png);
  }
  .mf_jpg {
    background-image: url(/dokuwiki/lib/images/fileicons/jpg.png);
  }
  .mf_odi {
    background-image: url(/dokuwiki/lib/images/fileicons/odi.png);
  }
  .mf_sxd {
    background-image: url(/dokuwiki/lib/images/fileicons/sxd.png);
  }
  .mf_sql {
    background-image: url(/dokuwiki/lib/images/fileicons/sql.png);
  }
  .mf_lua {
    background-image: url(/dokuwiki/lib/images/fileicons/lua.png);
  }
  .mf_pl {
    background-image: url(/dokuwiki/lib/images/fileicons/pl.png);
  }
  .mf_cc {
    background-image: url(/dokuwiki/lib/images/fileicons/cc.png);
  }
  .mf_json {
    background-image: url(/dokuwiki/lib/images/fileicons/json.png);
  }
  .mf_txt {
    background-image: url(/dokuwiki/lib/images/fileicons/txt.png);
  }
  .mf_sh {
    background-image: url(/dokuwiki/lib/images/fileicons/sh.png);
  }
  .mf_pas {
    background-image: url(/dokuwiki/lib/images/fileicons/pas.png);
  }
  .mf_cs {
    background-image: url(/dokuwiki/lib/images/fileicons/cs.png);
  }
  .mf_mp3 {
    background-image: url(/dokuwiki/lib/images/fileicons/mp3.png);
  }
  .mf_conf {
    background-image: url(/dokuwiki/lib/images/fileicons/conf.png);
  }
  .mf_asm {
    background-image: url(/dokuwiki/lib/images/fileicons/asm.png);
  }
  .mf_rpm {
    background-image: url(/dokuwiki/lib/images/fileicons/rpm.png);
  }
  .mf_mp4 {
    background-image: url(/dokuwiki/lib/images/fileicons/mp4.png);
  }
  .mf_bz2 {
    background-image: url(/dokuwiki/lib/images/fileicons/bz2.png);
  }
  .mf_ogv {
    background-image: url(/dokuwiki/lib/images/fileicons/ogv.png);
  }
  .mf_pptx {
    background-image: url(/dokuwiki/lib/images/fileicons/pptx.png);
  }
  .mf_7z {
    background-image: url(/dokuwiki/lib/images/fileicons/7z.png);
  }
  .mf_ods {
    background-image: url(/dokuwiki/lib/images/fileicons/ods.png);
  }
  .mf_py {
    background-image: url(/dokuwiki/lib/images/fileicons/py.png);
  }
  .mf_xls {
    background-image: url(/dokuwiki/lib/images/fileicons/xls.png);
  }
  .mf_swf {
    background-image: url(/dokuwiki/lib/images/fileicons/swf.png);
  }
  .mf_bash {
    background-image: url(/dokuwiki/lib/images/fileicons/bash.png);
  }
  .mf_csv {
    background-image: url(/dokuwiki/lib/images/fileicons/csv.png);
  }
  .mf_sxc {
    background-image: url(/dokuwiki/lib/images/fileicons/sxc.png);
  }
  .mf_ps {
    background-image: url(/dokuwiki/lib/images/fileicons/ps.png);
  }
  .mf_wav {
    background-image: url(/dokuwiki/lib/images/fileicons/wav.png);
  }
  .mf_deb {
    background-image: url(/dokuwiki/lib/images/fileicons/deb.png);
  }
}
@media screen {
  /* modal windows */
  /* media manager popup toggle buttons */
  /* hide something accessibly
   (e.g. for screen readers or to keep access keys working) */
  /**
 * GeSHi syntax highlighting styles
 *
 * Generated with https://www.dokuwiki.org/tips:geshi_style_builder
 * Cleaned up with http://cleancss.com/
 * Manulally LESSified
 */
  /* XXXXXXXXX /lib/scripts/jquery/jquery-ui-theme/smoothness.css XXXXXXXXX */
  /*! jQuery UI - v1.11.4 - 2015-03-11
* http://jqueryui.com
* Includes: core.css, accordion.css, autocomplete.css, button.css, datepicker.css, dialog.css, draggable.css, menu.css, progressbar.css, resizable.css, selectable.css, selectmenu.css, slider.css, sortable.css, spinner.css, tabs.css, tooltip.css, theme.css
* To view and modify this theme, visit http://jqueryui.com/themeroller/?ffDefault=Verdana%2CArial%2Csans-serif&fwDefault=normal&fsDefault=1.1em&cornerRadius=4px&bgColorHeader=cccccc&bgTextureHeader=highlight_soft&bgImgOpacityHeader=75&borderColorHeader=aaaaaa&fcHeader=222222&iconColorHeader=222222&bgColorContent=ffffff&bgTextureContent=flat&bgImgOpacityContent=75&borderColorContent=aaaaaa&fcContent=222222&iconColorContent=222222&bgColorDefault=e6e6e6&bgTextureDefault=glass&bgImgOpacityDefault=75&borderColorDefault=d3d3d3&fcDefault=555555&iconColorDefault=888888&bgColorHover=dadada&bgTextureHover=glass&bgImgOpacityHover=75&borderColorHover=999999&fcHover=212121&iconColorHover=454545&bgColorActive=ffffff&bgTextureActive=glass&bgImgOpacityActive=65&borderColorActive=aaaaaa&fcActive=212121&iconColorActive=454545&bgColorHighlight=fbf9ee&bgTextureHighlight=glass&bgImgOpacityHighlight=55&borderColorHighlight=fcefa1&fcHighlight=363636&iconColorHighlight=2e83ff&bgColorError=fef1ec&bgTextureError=glass&bgImgOpacityError=95&borderColorError=cd0a0a&fcError=cd0a0a&iconColorError=cd0a0a&bgColorOverlay=aaaaaa&bgTextureOverlay=flat&bgImgOpacityOverlay=0&opacityOverlay=30&bgColorShadow=aaaaaa&bgTextureShadow=flat&bgImgOpacityShadow=0&opacityShadow=30&thicknessShadow=8px&offsetTopShadow=-8px&offsetLeftShadow=-8px&cornerRadiusShadow=8px
* Copyright 2015 jQuery Foundation and other contributors; Licensed MIT */
  /* Layout helpers
----------------------------------*/
  /* Interaction Cues
----------------------------------*/
  /* Icons
----------------------------------*/
  /* states and images */
  /* Misc visuals
----------------------------------*/
  /* Overlays */
  /* to make room for the icon, a width needs to be set here */
  /* button elements seem to need a little more width */
  /* button text element */
  /* no icon support for input elements, provide padding by default */
  /* button icon element(s) */
  /* button sets */
  /* workarounds */
  /* reset extra padding in Firefox, see h5bp.com/l */
  /* with multiple calendars */
  /* RTL support */
  /* icon support */
  /* left-aligned */
  /* right-aligned */
  /* support: IE8 - See #6727 */
  /* more specificity required here to override default borders */
  /* vertically center icon */
  /* TR overrides */
  /* need to fix icons sprite */
  /* Component containers
----------------------------------*/
  /* Interaction states
----------------------------------*/
  /* positioning */
  /* ui-icon-seek-first is deprecated, use ui-icon-seek-start instead */
  /* Corner radius */
  /* XXXXXXXXX /lib/plugins/pagelist/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/pagelist/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/pagelist/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/pagelist/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/acl/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/acl/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/acl/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/acl/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/info/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/info/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/info/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/info/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/upgrade/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/upgrade/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/upgrade/style.css XXXXXXXXX */
  /* based on http://cssdeck.com/labs/progress-bar */
  /* XXXXXXXXX /lib/plugins/upgrade/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authad/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authad/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authad/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authad/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/xbr/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/xbr/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/xbr/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/xbr/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/backup/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/backup/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/backup/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/backup/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/usermanager/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/usermanager/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/usermanager/style.css XXXXXXXXX */
  /* User Manager specific styles */
  /* IE won't understand but doesn't require it */
  /* XXXXXXXXX /lib/plugins/usermanager/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/styling/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/styling/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/styling/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/styling/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/conflictmerger/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/conflictmerger/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/conflictmerger/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/conflictmerger/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/plantuml/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/plantuml/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/plantuml/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/plantuml/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/revert/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/revert/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/revert/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/revert/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authldap/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authldap/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authldap/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authldap/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/include/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/include/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/include/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/include/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/searchformgoto/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/searchformgoto/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/searchformgoto/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/searchformgoto/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/popularity/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/popularity/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/popularity/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/popularity/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/safefnrecode/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/safefnrecode/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/safefnrecode/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/safefnrecode/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/wrap/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/wrap/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/wrap/style.css XXXXXXXXX */
  /********************************************************************
Screen Styles for the Wrap Plugin (additional to all.css)
********************************************************************/
  /* box
********************************************************************/
  /*____________ notes with icons ____________*/
  /* general styles for all note divs */
  /* general styles for all note spans */
  /* sorry for icons glued to the right side, but there is currently no way
     to make this look good without adjusting the images themselves */
  /*____________ info ____________*/
  /*____________ important ____________*/
  /*____________ alert ____________*/
  /*____________ tip ____________*/
  /*____________ help ____________*/
  /*____________ todo ____________*/
  /*____________ download ____________*/
  /*____________ safety notes ____________*/
  /* mark
********************************************************************/
  /* miscellaneous
********************************************************************/
  /*____________ spoiler ____________*/
  /*____________ only print ____________*/
  /*____________ tabs ____________*/
  /* in addition to template styles */
  /* XXXXXXXXX /lib/plugins/wrap/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authpgsql/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authpgsql/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authpgsql/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authpgsql/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authplain/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authplain/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authplain/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authplain/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/config/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/config/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/config/style.css XXXXXXXXX */
  /* plugin:configmanager */
  /* fixed data column width */
  /* end plugin:configmanager */
  /* XXXXXXXXX /lib/plugins/config/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/extension/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/extension/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/extension/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/extension/style.less XXXXXXXXX */
  /*
 * Extension plugin styles
 *
 * @author  Christopher Smith <chris@jalakai.co.uk>
 * @author  Piyush Mishra <me@piyushmishra.com>
 * @author  Håkan Sandell <sandell.hakan@gmail.com>
 * @author  Anika Henke <anika@selfthinker.org>
 */
  /**
 * very simple lightbox
 * @link http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/super-simple-lightbox-with-css-and-jquery/
 */
  /**
 * general styles
 */
  /*
 * extensions table
 */
  /**
 * extension table left column
 */
  /*
 * Enabled/Disabled overrides
 */
  /**
 * extension table right column
 */
  /**
 * Search form
 */
  /**
 * Install form
 */
  /* XXXXXXXXX /lib/plugins/tag/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/tag/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/tag/style.css XXXXXXXXX */
  /* make it easier to select the +/- checkboxes in the tagsearch table by making them block elements */
  /* XXXXXXXXX /lib/plugins/tag/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authmysql/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authmysql/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authmysql/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authmysql/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/swiftmail/screen.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/swiftmail/screen.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/swiftmail/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/swiftmail/style.less XXXXXXXXX */
  /* XXXXXXXXX /lib/tpl/arctic/layout.css XXXXXXXXX */
  /**
 * Tableless Layout for default template
 *
 * @author Andreas Gohr <andi@splitbrain.org>
 * @author moraes <moraes@tipos.com.br>
 */
  /* -------------- top row --------------- */
  /* ---------------  top and bottom bar ---------------- */
  /* ------------- File Metadata ----------------------- */
  /* XXXXXXXXX /lib/tpl/arctic/design.css XXXXXXXXX */
  /**
 * Design elements for default Template
 *
 * @author Andreas Gohr <andi@splitbrain.org>
 * @author Anika Henke <anika@selfthinker.org>
 */
  /* -------------- general elements --------------- */
  /* the document */
  /* ---------------- forms ------------------------ */
  /* nice alphatransparency background except for IE <7 */
  /* disabled style - not understood by IE */
  /* edit form */
  /* --------- buttons ------------------- */
  /* ----------- page navigator ------------- */
  /* ----------- type of recent changes select -------- */
  /* --------------- Links ------------------ */
  /* external link */
  /* windows share */
  /* interwiki link (icon are set by dokuwiki) */
  /* link to some embedded media */
  /* email link */
  /* existing wikipage */
  /* not existing wikipage */
  /* ------------- Page elements ----------------- */
  /* embedded images */
  /* smileys */
  /* general headline setup */
  /* special headlines */
  /* indent different sections */
  /* unordered lists */
  /* ordered lists */
  /* no bottom gap in between and smaller left margin for nested lists */
  /* the list items overriding the ul/ol definition */
  /* code blocks by indention */
  /* code blocks by code tag */
  /* code blocks by file tag */
  /* filenames for file and code blocks */
  /* inline tables */
  /* ---------- table of contents ------------------- */
  /* ---------------------------- Diff rendering --------------------------*/
  /* --------------------- footnotes -------------------------------- */
  /* insitu-footnotes */
  /* overcome IE issue with one line code or file boxes which require h. scrolling */
  /* --------------- search result formating --------------- */
  /* ------------------ Additional ---------------------- */
  /* ---------- AJAX quicksearch ----------- */
  /* --------- Toolbar -------------------- */
  /* ---------------  Image Details  ----------------- */
  /* XXXXXXXXX /lib/tpl/arctic/style.css XXXXXXXXX */
  /* XXXXXXXXX /lib/tpl/arctic/media.css XXXXXXXXX */
  /**
 * The CSS in here controls the appearance of the media manager
 */
  /* --- Tree formatting --- */
  /* I don't understand this, but this fixes a style bug in IE;
it's dirty, so any "real" fixes are welcome */
  /* --- options --- */
  /* --- file list --- */
  /* --- upload form --- */
  /* --- meta edit form --- */
  /* XXXXXXXXX /lib/tpl/arctic/_mediaoptions.css XXXXXXXXX */
  /* XXXXXXXXX /lib/tpl/arctic/_admin.css XXXXXXXXX */
  /* XXXXXXXXX /lib/tpl/arctic/_linkwiz.css XXXXXXXXX */
  /* XXXXXXXXX /lib/tpl/arctic/_subscription.css XXXXXXXXX */
  /**
 * Styles for the subscription page
 */
  /* XXXXXXXXX /lib/tpl/arctic/_mediamanager.css XXXXXXXXX */
  /*____________ Layout ____________*/
  /*____________ Namespaces tree ____________*/
  /*____________ Panel header ____________*/
  /*____________ File list ____________*/
  /* thumbs */
  /* rows */
  /*____________ Upload panel ____________*/
  /*____________ File preview ____________*/
  /*____________ Meta data edit form ____________*/
  /*____________ Revisions form ____________*/
  /* File diff */
  /* Image diff */
  /* XXXXXXXXX /lib/tpl/arctic/_tabs.css XXXXXXXXX */
  /* XXXXXXXXX /lib/tpl/arctic/_fileuploader.css XXXXXXXXX */
  /* select file button */
  /* drop area */
  /* list of files to upload */
  /* XXXXXXXXX /lib/tpl/arctic/arctic_layout.css XXXXXXXXX */
  /**
 * Tableless Layout - additional CSS for Arctic Template
 *
 * @author Michael Klier <chi@chimeric.de>
 */
  /* XXXXXXXXX /lib/tpl/arctic/arctic_design.css XXXXXXXXX */
  /**
 * Design Elements - additional  CSS for the Arctic template
 *
 * @author Michael Klier <chi@chimeric.de>
 */
  /* ----- General Elements ----- */
  /* ----- Sidebar -------------- */
  /* ----- Links ---------------- */
  /* ----- Page Elements -------- */
  /* Footnotes fix for IE7 */
  /* ----- Forms ---------------- */
  /* Buttons */
  /* ----- Table of Contents ---- */
  /* ----- AJAX Quicksearch ----- */
  /* ----- Toolbox -------------- */
  /* XXXXXXXXX /lib/tpl/arctic/arctic_media.css XXXXXXXXX */
  /**
 * Media Manager - additional CSS for the Arctic Template
 * @author Michael Klier <chi@chimeric.de>
 */
  /* XXXXXXXXX /conf/userstyle.css XXXXXXXXX */
  /* XXXXXXXXX /conf/userstyle.less XXXXXXXXX */
  div.error,
  div.info,
  div.success,
  div.notify {
    color: #000;
    background-repeat: no-repeat;
    background-position: 8px 50%;
    border: 1px solid;
    font-size: 90%;
    margin: 0 0 0.5em;
    padding: 0.4em;
    padding-left: 32px;
    overflow: hidden;
    border-radius: 5px;
  }
  [dir=rtl] div.error,
  [dir=rtl] div.info,
  [dir=rtl] div.success,
  [dir=rtl] div.notify {
    background-position: 99% 50%;
    padding-left: .4em;
    padding-right: 32px;
  }
  div.error {
    background-color: #fcc;
    background-image: url(/dokuwiki/lib/styles/../images/error.png);
    border-color: #ebb;
  }
  div.info {
    background-color: #ccf;
    background-image: url(/dokuwiki/lib/styles/../images/info.png);
    border-color: #bbe;
  }
  div.success {
    background-color: #cfc;
    background-image: url(/dokuwiki/lib/styles/../images/success.png);
    border-color: #beb;
  }
  div.notify {
    background-color: #ffc;
    background-image: url(/dokuwiki/lib/styles/../images/notify.png);
    border-color: #eeb;
  }
  .JSpopup,
  #link__wiz {
    position: absolute;
    background-color: #fff;
    color: #000;
    z-index: 20;
    overflow: hidden;
  }
  #link__wiz .ui-dialog-content {
    padding-left: 0;
    padding-right: 0;
  }
  #media__popup_content button.button {
    border: 1px outset;
  }
  #media__popup_content button.selected {
    border-style: inset;
  }
  .a11y {
    position: absolute !important;
    left: -99999em !important;
    top: auto !important;
    width: 1px !important;
    height: 1px !important;
    overflow: hidden !important;
  }
  [dir=rtl] .a11y {
    left: auto !important;
    right: -99999em !important;
  }
  .code .co0 {
    color: #666666;
    font-style: italic;
  }
  .code .co4 {
    color: #cc0000;
    font-style: italic;
  }
  .code .es5 {
    color: #006699;
    font-weight: bold;
  }
  .code .es6 {
    color: #009933;
    font-weight: bold;
  }
  .code .kw2 {
    color: #000000;
    font-weight: bold;
  }
  .code .kw5 {
    color: #008000;
  }
  .code .kw6 {
    color: #f08;
    font-weight: bold;
  }
  .code .me0 {
    color: #004000;
  }
  .code .nu0 {
    color: #cc66cc;
  }
  .code .re0 {
    color: #0000ff;
  }
  .code .re3 {
    color: #ff3333;
    font-weight: bold;
  }
  .code .re4 {
    color: #009999;
  }
  .code .re5 {
    color: #660033;
  }
  .code .sc-2 {
    color: #404040;
  }
  .code .sy3 {
    color: #000040;
  }
  .code .br0,
  .code .sy0 {
    color: #66cc66;
  }
  .code .co1,
  .code .coMULTI,
  .code .sc-1 {
    color: #808080;
    font-style: italic;
  }
  .code .co2,
  .code .sy1 {
    color: #339933;
  }
  .code .co3,
  .code .sy4 {
    color: #008080;
  }
  .code .es0,
  .code .es1,
  .code .esHARD {
    color: #000099;
    font-weight: bold;
  }
  .code .es2,
  .code .es3,
  .code .es4 {
    color: #660099;
    font-weight: bold;
  }
  .code .kw1,
  .code .kw8 {
    color: #b1b100;
  }
  .code .kw10,
  .code .kw11,
  .code .kw12,
  .code .kw9 {
    color: #003399;
    font-weight: bold;
  }
  .code .kw13,
  .code .kw14,
  .code .kw15,
  .code .kw16,
  .code .me1,
  .code .me2 {
    color: #006600;
  }
  .code .kw3,
  .code .kw7,
  .code .sy2 {
    color: #000066;
  }
  .code .kw4,
  .code .re2 {
    color: #993333;
  }
  .code .re1,
  .code .st0,
  .code .st_h {
    color: #ff0000;
  }
  .ui-helper-hidden {
    display: none;
  }
  .ui-helper-hidden-accessible {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  .ui-helper-reset {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    line-height: 1.3;
    text-decoration: none;
    font-size: 100%;
    list-style: none;
  }
  .ui-helper-clearfix:before,
  .ui-helper-clearfix:after {
    content: "";
    display: table;
    border-collapse: collapse;
  }
  .ui-helper-clearfix:after {
    clear: both;
  }
  .ui-helper-clearfix {
    /* support: IE7 */
    min-height: 0;
  }
  .ui-helper-zfix {
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    position: absolute;
    opacity: 0;
    /* support: IE8 */
    filter: Alpha(Opacity=0);
  }
  .ui-front {
    z-index: 100;
  }
  .ui-state-disabled {
    cursor: default !important;
  }
  .ui-icon {
    display: block;
    text-indent: -99999px;
    overflow: hidden;
    background-repeat: no-repeat;
  }
  .ui-widget-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
  .ui-accordion .ui-accordion-header {
    display: block;
    cursor: pointer;
    position: relative;
    margin: 2px 0 0 0;
    padding: .5em .5em .5em .7em;
    /* support: IE7 */
    min-height: 0;
    font-size: 100%;
  }
  .ui-accordion .ui-accordion-icons {
    padding-left: 2.2em;
  }
  .ui-accordion .ui-accordion-icons .ui-accordion-icons {
    padding-left: 2.2em;
  }
  .ui-accordion .ui-accordion-header .ui-accordion-header-icon {
    position: absolute;
    left: .5em;
    top: 50%;
    margin-top: -8px;
  }
  .ui-accordion .ui-accordion-content {
    padding: 1em 2.2em;
    border-top: 0;
    overflow: auto;
  }
  .ui-autocomplete {
    position: absolute;
    top: 0;
    left: 0;
    cursor: default;
  }
  .ui-button {
    display: inline-block;
    position: relative;
    padding: 0;
    line-height: normal;
    margin-right: .1em;
    cursor: pointer;
    vertical-align: middle;
    text-align: center;
    /* removes extra width in IE */
    overflow: visible;
  }
  .ui-button,
  .ui-button:link,
  .ui-button:visited,
  .ui-button:hover,
  .ui-button:active {
    text-decoration: none;
  }
  .ui-button-icon-only {
    width: 2.2em;
  }
  button.ui-button-icon-only {
    width: 2.4em;
  }
  .ui-button-icons-only {
    width: 3.4em;
  }
  button.ui-button-icons-only {
    width: 3.7em;
  }
  .ui-button .ui-button-text {
    display: block;
    line-height: normal;
  }
  .ui-button-text-only .ui-button-text {
    padding: .4em 1em;
  }
  .ui-button-icon-only .ui-button-text,
  .ui-button-icons-only .ui-button-text {
    padding: .4em;
    text-indent: -9999999px;
  }
  .ui-button-text-icon-primary .ui-button-text,
  .ui-button-text-icons .ui-button-text {
    padding: .4em 1em .4em 2.1em;
  }
  .ui-button-text-icon-secondary .ui-button-text,
  .ui-button-text-icons .ui-button-text {
    padding: .4em 2.1em .4em 1em;
  }
  .ui-button-text-icons .ui-button-text {
    padding-left: 2.1em;
    padding-right: 2.1em;
  }
  input.ui-button {
    padding: .4em 1em;
  }
  .ui-button-icon-only .ui-icon,
  .ui-button-text-icon-primary .ui-icon,
  .ui-button-text-icon-secondary .ui-icon,
  .ui-button-text-icons .ui-icon,
  .ui-button-icons-only .ui-icon {
    position: absolute;
    top: 50%;
    margin-top: -8px;
  }
  .ui-button-icon-only .ui-icon {
    left: 50%;
    margin-left: -8px;
  }
  .ui-button-text-icon-primary .ui-button-icon-primary,
  .ui-button-text-icons .ui-button-icon-primary,
  .ui-button-icons-only .ui-button-icon-primary {
    left: .5em;
  }
  .ui-button-text-icon-secondary .ui-button-icon-secondary,
  .ui-button-text-icons .ui-button-icon-secondary,
  .ui-button-icons-only .ui-button-icon-secondary {
    right: .5em;
  }
  .ui-buttonset {
    margin-right: 7px;
  }
  .ui-buttonset .ui-button {
    margin-left: 0;
    margin-right: -0.3em;
  }
  input.ui-button::-moz-focus-inner,
  button.ui-button::-moz-focus-inner {
    border: 0;
    padding: 0;
  }
  .ui-datepicker {
    width: 17em;
    padding: .2em .2em 0;
    display: none;
  }
  .ui-datepicker .ui-datepicker-header {
    position: relative;
    padding: .2em 0;
  }
  .ui-datepicker .ui-datepicker-prev,
  .ui-datepicker .ui-datepicker-next {
    position: absolute;
    top: 2px;
    width: 1.8em;
    height: 1.8em;
  }
  .ui-datepicker .ui-datepicker-prev-hover,
  .ui-datepicker .ui-datepicker-next-hover {
    top: 1px;
  }
  .ui-datepicker .ui-datepicker-prev {
    left: 2px;
  }
  .ui-datepicker .ui-datepicker-next {
    right: 2px;
  }
  .ui-datepicker .ui-datepicker-prev-hover {
    left: 1px;
  }
  .ui-datepicker .ui-datepicker-next-hover {
    right: 1px;
  }
  .ui-datepicker .ui-datepicker-prev span,
  .ui-datepicker .ui-datepicker-next span {
    display: block;
    position: absolute;
    left: 50%;
    margin-left: -8px;
    top: 50%;
    margin-top: -8px;
  }
  .ui-datepicker .ui-datepicker-title {
    margin: 0 2.3em;
    line-height: 1.8em;
    text-align: center;
  }
  .ui-datepicker .ui-datepicker-title select {
    font-size: 1em;
    margin: 1px 0;
  }
  .ui-datepicker select.ui-datepicker-month,
  .ui-datepicker select.ui-datepicker-year {
    width: 45%;
  }
  .ui-datepicker table {
    width: 100%;
    font-size: .9em;
    border-collapse: collapse;
    margin: 0 0 .4em;
  }
  .ui-datepicker th {
    padding: .7em .3em;
    text-align: center;
    font-weight: bold;
    border: 0;
  }
  .ui-datepicker td {
    border: 0;
    padding: 1px;
  }
  .ui-datepicker td span,
  .ui-datepicker td a {
    display: block;
    padding: .2em;
    text-align: right;
    text-decoration: none;
  }
  .ui-datepicker .ui-datepicker-buttonpane {
    background-image: none;
    margin: .7em 0 0 0;
    padding: 0 .2em;
    border-left: 0;
    border-right: 0;
    border-bottom: 0;
  }
  .ui-datepicker .ui-datepicker-buttonpane button {
    float: right;
    margin: .5em .2em .4em;
    cursor: pointer;
    padding: .2em .6em .3em .6em;
    width: auto;
    overflow: visible;
  }
  .ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
    float: left;
  }
  .ui-datepicker.ui-datepicker-multi {
    width: auto;
  }
  .ui-datepicker-multi .ui-datepicker-group {
    float: left;
  }
  .ui-datepicker-multi .ui-datepicker-group table {
    width: 95%;
    margin: 0 auto .4em;
  }
  .ui-datepicker-multi-2 .ui-datepicker-group {
    width: 50%;
  }
  .ui-datepicker-multi-3 .ui-datepicker-group {
    width: 33.3%;
  }
  .ui-datepicker-multi-4 .ui-datepicker-group {
    width: 25%;
  }
  .ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header,
  .ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header {
    border-left-width: 0;
  }
  .ui-datepicker-multi .ui-datepicker-buttonpane {
    clear: left;
  }
  .ui-datepicker-row-break {
    clear: both;
    width: 100%;
    font-size: 0;
  }
  .ui-datepicker-rtl {
    direction: rtl;
  }
  .ui-datepicker-rtl .ui-datepicker-prev {
    right: 2px;
    left: auto;
  }
  .ui-datepicker-rtl .ui-datepicker-next {
    left: 2px;
    right: auto;
  }
  .ui-datepicker-rtl .ui-datepicker-prev:hover {
    right: 1px;
    left: auto;
  }
  .ui-datepicker-rtl .ui-datepicker-next:hover {
    left: 1px;
    right: auto;
  }
  .ui-datepicker-rtl .ui-datepicker-buttonpane {
    clear: right;
  }
  .ui-datepicker-rtl .ui-datepicker-buttonpane button {
    float: left;
  }
  .ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current,
  .ui-datepicker-rtl .ui-datepicker-group {
    float: right;
  }
  .ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header,
  .ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header {
    border-right-width: 0;
    border-left-width: 1px;
  }
  .ui-dialog {
    overflow: hidden;
    position: absolute;
    top: 0;
    left: 0;
    padding: .2em;
    outline: 0;
  }
  .ui-dialog .ui-dialog-titlebar {
    padding: .4em 1em;
    position: relative;
  }
  .ui-dialog .ui-dialog-title {
    float: left;
    margin: .1em 0;
    white-space: nowrap;
    width: 90%;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .ui-dialog .ui-dialog-titlebar-close {
    position: absolute;
    right: .3em;
    top: 50%;
    width: 20px;
    margin: -10px 0 0 0;
    padding: 1px;
    height: 20px;
  }
  .ui-dialog .ui-dialog-content {
    position: relative;
    border: 0;
    padding: .5em 1em;
    background: none;
    overflow: auto;
  }
  .ui-dialog .ui-dialog-buttonpane {
    text-align: left;
    border-width: 1px 0 0 0;
    background-image: none;
    margin-top: .5em;
    padding: .3em 1em .5em .4em;
  }
  .ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset {
    float: right;
  }
  .ui-dialog .ui-dialog-buttonpane button {
    margin: .5em .4em .5em 0;
    cursor: pointer;
  }
  .ui-dialog .ui-resizable-se {
    width: 12px;
    height: 12px;
    right: -5px;
    bottom: -5px;
    background-position: 16px 16px;
  }
  .ui-draggable .ui-dialog-titlebar {
    cursor: move;
  }
  .ui-draggable-handle {
    -ms-touch-action: none;
    touch-action: none;
  }
  .ui-menu {
    list-style: none;
    padding: 0;
    margin: 0;
    display: block;
    outline: none;
  }
  .ui-menu .ui-menu {
    position: absolute;
  }
  .ui-menu .ui-menu-item {
    position: relative;
    margin: 0;
    padding: 3px 1em 3px .4em;
    cursor: pointer;
    /* support: IE7 */
    /* support: IE10, see #8844 */
    min-height: 0;
    list-style-image: url("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7");
  }
  .ui-menu .ui-menu-divider {
    margin: 5px 0;
    height: 0;
    font-size: 0;
    line-height: 0;
    border-width: 1px 0 0 0;
  }
  .ui-menu .ui-state-focus,
  .ui-menu .ui-state-active {
    margin: -1px;
  }
  .ui-menu-icons {
    position: relative;
  }
  .ui-menu-icons .ui-menu-item {
    padding-left: 2em;
  }
  .ui-menu .ui-icon {
    position: absolute;
    top: 0;
    bottom: 0;
    left: .2em;
    margin: auto 0;
  }
  .ui-menu .ui-menu-icon {
    left: auto;
    right: 0;
  }
  .ui-progressbar {
    height: 2em;
    text-align: left;
    overflow: hidden;
  }
  .ui-progressbar .ui-progressbar-value {
    margin: -1px;
    height: 100%;
  }
  .ui-progressbar .ui-progressbar-overlay {
    background: url("data:image/gif;base64,R0lGODlhKAAoAIABAAAAAP///yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJAQABACwAAAAAKAAoAAACkYwNqXrdC52DS06a7MFZI+4FHBCKoDeWKXqymPqGqxvJrXZbMx7Ttc+w9XgU2FB3lOyQRWET2IFGiU9m1frDVpxZZc6bfHwv4c1YXP6k1Vdy292Fb6UkuvFtXpvWSzA+HycXJHUXiGYIiMg2R6W459gnWGfHNdjIqDWVqemH2ekpObkpOlppWUqZiqr6edqqWQAAIfkECQEAAQAsAAAAACgAKAAAApSMgZnGfaqcg1E2uuzDmmHUBR8Qil95hiPKqWn3aqtLsS18y7G1SzNeowWBENtQd+T1JktP05nzPTdJZlR6vUxNWWjV+vUWhWNkWFwxl9VpZRedYcflIOLafaa28XdsH/ynlcc1uPVDZxQIR0K25+cICCmoqCe5mGhZOfeYSUh5yJcJyrkZWWpaR8doJ2o4NYq62lAAACH5BAkBAAEALAAAAAAoACgAAAKVDI4Yy22ZnINRNqosw0Bv7i1gyHUkFj7oSaWlu3ovC8GxNso5fluz3qLVhBVeT/Lz7ZTHyxL5dDalQWPVOsQWtRnuwXaFTj9jVVh8pma9JjZ4zYSj5ZOyma7uuolffh+IR5aW97cHuBUXKGKXlKjn+DiHWMcYJah4N0lYCMlJOXipGRr5qdgoSTrqWSq6WFl2ypoaUAAAIfkECQEAAQAsAAAAACgAKAAAApaEb6HLgd/iO7FNWtcFWe+ufODGjRfoiJ2akShbueb0wtI50zm02pbvwfWEMWBQ1zKGlLIhskiEPm9R6vRXxV4ZzWT2yHOGpWMyorblKlNp8HmHEb/lCXjcW7bmtXP8Xt229OVWR1fod2eWqNfHuMjXCPkIGNileOiImVmCOEmoSfn3yXlJWmoHGhqp6ilYuWYpmTqKUgAAIfkECQEAAQAsAAAAACgAKAAAApiEH6kb58biQ3FNWtMFWW3eNVcojuFGfqnZqSebuS06w5V80/X02pKe8zFwP6EFWOT1lDFk8rGERh1TTNOocQ61Hm4Xm2VexUHpzjymViHrFbiELsefVrn6XKfnt2Q9G/+Xdie499XHd2g4h7ioOGhXGJboGAnXSBnoBwKYyfioubZJ2Hn0RuRZaflZOil56Zp6iioKSXpUAAAh+QQJAQABACwAAAAAKAAoAAACkoQRqRvnxuI7kU1a1UU5bd5tnSeOZXhmn5lWK3qNTWvRdQxP8qvaC+/yaYQzXO7BMvaUEmJRd3TsiMAgswmNYrSgZdYrTX6tSHGZO73ezuAw2uxuQ+BbeZfMxsexY35+/Qe4J1inV0g4x3WHuMhIl2jXOKT2Q+VU5fgoSUI52VfZyfkJGkha6jmY+aaYdirq+lQAACH5BAkBAAEALAAAAAAoACgAAAKWBIKpYe0L3YNKToqswUlvznigd4wiR4KhZrKt9Upqip61i9E3vMvxRdHlbEFiEXfk9YARYxOZZD6VQ2pUunBmtRXo1Lf8hMVVcNl8JafV38aM2/Fu5V16Bn63r6xt97j09+MXSFi4BniGFae3hzbH9+hYBzkpuUh5aZmHuanZOZgIuvbGiNeomCnaxxap2upaCZsq+1kAACH5BAkBAAEALAAAAAAoACgAAAKXjI8By5zf4kOxTVrXNVlv1X0d8IGZGKLnNpYtm8Lr9cqVeuOSvfOW79D9aDHizNhDJidFZhNydEahOaDH6nomtJjp1tutKoNWkvA6JqfRVLHU/QUfau9l2x7G54d1fl995xcIGAdXqMfBNadoYrhH+Mg2KBlpVpbluCiXmMnZ2Sh4GBqJ+ckIOqqJ6LmKSllZmsoq6wpQAAAh+QQJAQABACwAAAAAKAAoAAAClYx/oLvoxuJDkU1a1YUZbJ59nSd2ZXhWqbRa2/gF8Gu2DY3iqs7yrq+xBYEkYvFSM8aSSObE+ZgRl1BHFZNr7pRCavZ5BW2142hY3AN/zWtsmf12p9XxxFl2lpLn1rseztfXZjdIWIf2s5dItwjYKBgo9yg5pHgzJXTEeGlZuenpyPmpGQoKOWkYmSpaSnqKileI2FAAACH5BAkBAAEALAAAAAAoACgAAAKVjB+gu+jG4kORTVrVhRlsnn2dJ3ZleFaptFrb+CXmO9OozeL5VfP99HvAWhpiUdcwkpBH3825AwYdU8xTqlLGhtCosArKMpvfa1mMRae9VvWZfeB2XfPkeLmm18lUcBj+p5dnN8jXZ3YIGEhYuOUn45aoCDkp16hl5IjYJvjWKcnoGQpqyPlpOhr3aElaqrq56Bq7VAAAOw==");
    height: 100%;
    /* support: IE8 */
    filter: alpha(opacity=25);
    opacity: 0.25;
  }
  .ui-progressbar-indeterminate .ui-progressbar-value {
    background-image: none;
  }
  .ui-resizable {
    position: relative;
  }
  .ui-resizable-handle {
    position: absolute;
    font-size: 0.1px;
    display: block;
    -ms-touch-action: none;
    touch-action: none;
  }
  .ui-resizable-disabled .ui-resizable-handle,
  .ui-resizable-autohide .ui-resizable-handle {
    display: none;
  }
  .ui-resizable-n {
    cursor: n-resize;
    height: 7px;
    width: 100%;
    top: -5px;
    left: 0;
  }
  .ui-resizable-s {
    cursor: s-resize;
    height: 7px;
    width: 100%;
    bottom: -5px;
    left: 0;
  }
  .ui-resizable-e {
    cursor: e-resize;
    width: 7px;
    right: -5px;
    top: 0;
    height: 100%;
  }
  .ui-resizable-w {
    cursor: w-resize;
    width: 7px;
    left: -5px;
    top: 0;
    height: 100%;
  }
  .ui-resizable-se {
    cursor: se-resize;
    width: 12px;
    height: 12px;
    right: 1px;
    bottom: 1px;
  }
  .ui-resizable-sw {
    cursor: sw-resize;
    width: 9px;
    height: 9px;
    left: -5px;
    bottom: -5px;
  }
  .ui-resizable-nw {
    cursor: nw-resize;
    width: 9px;
    height: 9px;
    left: -5px;
    top: -5px;
  }
  .ui-resizable-ne {
    cursor: ne-resize;
    width: 9px;
    height: 9px;
    right: -5px;
    top: -5px;
  }
  .ui-selectable {
    -ms-touch-action: none;
    touch-action: none;
  }
  .ui-selectable-helper {
    position: absolute;
    z-index: 100;
    border: 1px dotted black;
  }
  .ui-selectmenu-menu {
    padding: 0;
    margin: 0;
    position: absolute;
    top: 0;
    left: 0;
    display: none;
  }
  .ui-selectmenu-menu .ui-menu {
    /* Support: IE7 */
    overflow: auto;
    overflow-x: hidden;
    padding-bottom: 1px;
  }
  .ui-selectmenu-menu .ui-menu .ui-selectmenu-optgroup {
    font-size: 1em;
    font-weight: bold;
    line-height: 1.5;
    padding: 2px 0.4em;
    margin: 0.5em 0 0 0;
    height: auto;
    border: 0;
  }
  .ui-selectmenu-open {
    display: block;
  }
  .ui-selectmenu-button {
    display: inline-block;
    overflow: hidden;
    position: relative;
    text-decoration: none;
    cursor: pointer;
  }
  .ui-selectmenu-button span.ui-icon {
    right: 0.5em;
    left: auto;
    margin-top: -8px;
    position: absolute;
    top: 50%;
  }
  .ui-selectmenu-button span.ui-selectmenu-text {
    text-align: left;
    padding: 0.4em 2.1em 0.4em 1em;
    display: block;
    line-height: 1.4;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .ui-slider {
    position: relative;
    text-align: left;
  }
  .ui-slider .ui-slider-handle {
    position: absolute;
    z-index: 2;
    width: 1.2em;
    height: 1.2em;
    cursor: default;
    -ms-touch-action: none;
    touch-action: none;
  }
  .ui-slider .ui-slider-range {
    position: absolute;
    z-index: 1;
    font-size: .7em;
    display: block;
    border: 0;
    background-position: 0 0;
  }
  .ui-slider.ui-state-disabled .ui-slider-handle,
  .ui-slider.ui-state-disabled .ui-slider-range {
    filter: inherit;
  }
  .ui-slider-horizontal {
    height: .8em;
  }
  .ui-slider-horizontal .ui-slider-handle {
    top: -0.3em;
    margin-left: -0.6em;
  }
  .ui-slider-horizontal .ui-slider-range {
    top: 0;
    height: 100%;
  }
  .ui-slider-horizontal .ui-slider-range-min {
    left: 0;
  }
  .ui-slider-horizontal .ui-slider-range-max {
    right: 0;
  }
  .ui-slider-vertical {
    width: .8em;
    height: 100px;
  }
  .ui-slider-vertical .ui-slider-handle {
    left: -0.3em;
    margin-left: 0;
    margin-bottom: -0.6em;
  }
  .ui-slider-vertical .ui-slider-range {
    left: 0;
    width: 100%;
  }
  .ui-slider-vertical .ui-slider-range-min {
    bottom: 0;
  }
  .ui-slider-vertical .ui-slider-range-max {
    top: 0;
  }
  .ui-sortable-handle {
    -ms-touch-action: none;
    touch-action: none;
  }
  .ui-spinner {
    position: relative;
    display: inline-block;
    overflow: hidden;
    padding: 0;
    vertical-align: middle;
  }
  .ui-spinner-input {
    border: none;
    background: none;
    color: inherit;
    padding: 0;
    margin: .2em 0;
    vertical-align: middle;
    margin-left: .4em;
    margin-right: 22px;
  }
  .ui-spinner-button {
    width: 16px;
    height: 50%;
    font-size: .5em;
    padding: 0;
    margin: 0;
    text-align: center;
    position: absolute;
    cursor: default;
    display: block;
    overflow: hidden;
    right: 0;
  }
  .ui-spinner a.ui-spinner-button {
    border-top: none;
    border-bottom: none;
    border-right: none;
  }
  .ui-spinner .ui-icon {
    position: absolute;
    margin-top: -8px;
    top: 50%;
    left: 0;
  }
  .ui-spinner-up {
    top: 0;
  }
  .ui-spinner-down {
    bottom: 0;
  }
  .ui-spinner .ui-icon-triangle-1-s {
    background-position: -65px -16px;
  }
  .ui-tabs {
    /* position: relative prevents IE scroll bug (element with position: relative inside container with overflow: auto appear as "fixed") */
    position: relative;
    padding: .2em;
  }
  .ui-tabs .ui-tabs-nav {
    margin: 0;
    padding: .2em .2em 0;
  }
  .ui-tabs .ui-tabs-nav li {
    list-style: none;
    float: left;
    position: relative;
    top: 0;
    margin: 1px .2em 0 0;
    border-bottom-width: 0;
    padding: 0;
    white-space: nowrap;
  }
  .ui-tabs .ui-tabs-nav .ui-tabs-anchor {
    float: left;
    padding: .5em 1em;
    text-decoration: none;
  }
  .ui-tabs .ui-tabs-nav li.ui-tabs-active {
    margin-bottom: -1px;
    padding-bottom: 1px;
  }
  .ui-tabs .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor,
  .ui-tabs .ui-tabs-nav li.ui-state-disabled .ui-tabs-anchor,
  .ui-tabs .ui-tabs-nav li.ui-tabs-loading .ui-tabs-anchor {
    cursor: text;
  }
  .ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor {
    cursor: pointer;
  }
  .ui-tabs .ui-tabs-panel {
    display: block;
    border-width: 0;
    padding: 1em 1.4em;
    background: none;
  }
  .ui-tooltip {
    padding: 8px;
    position: absolute;
    z-index: 9999;
    max-width: 300px;
    -webkit-box-shadow: 0 0 5px #aaa;
    box-shadow: 0 0 5px #aaa;
  }
  body .ui-tooltip {
    border-width: 2px;
  }
  .ui-widget {
    font-size: 1.1em;
  }
  .ui-widget .ui-widget {
    font-size: 1em;
  }
  .ui-widget input,
  .ui-widget select,
  .ui-widget textarea,
  .ui-widget button {
    font-size: 1em;
  }
  .ui-widget-content {
    border: 1px solid #aaaaaa;
    background: #ffffff url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-bg_flat_75_ffffff_40x100.png") 50% 50% repeat-x;
    color: #222222;
  }
  .ui-widget-content a {
    color: #222222;
  }
  .ui-widget-header {
    border: 1px solid #aaaaaa;
    background: #cccccc url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-bg_highlight-soft_75_cccccc_1x100.png") 50% 50% repeat-x;
    color: #222222;
    font-weight: bold;
  }
  .ui-widget-header a {
    color: #222222;
  }
  .ui-state-default,
  .ui-widget-content .ui-state-default,
  .ui-widget-header .ui-state-default {
    border: 1px solid #d3d3d3;
    background: #e6e6e6 url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-bg_glass_75_e6e6e6_1x400.png") 50% 50% repeat-x;
    font-weight: normal;
    color: #555555;
  }
  .ui-state-default a,
  .ui-state-default a:link,
  .ui-state-default a:visited {
    color: #555555;
    text-decoration: none;
  }
  .ui-state-hover,
  .ui-widget-content .ui-state-hover,
  .ui-widget-header .ui-state-hover,
  .ui-state-focus,
  .ui-widget-content .ui-state-focus,
  .ui-widget-header .ui-state-focus {
    border: 1px solid #999999;
    background: #dadada url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-bg_glass_75_dadada_1x400.png") 50% 50% repeat-x;
    font-weight: normal;
    color: #212121;
  }
  .ui-state-hover a,
  .ui-state-hover a:hover,
  .ui-state-hover a:link,
  .ui-state-hover a:visited,
  .ui-state-focus a,
  .ui-state-focus a:hover,
  .ui-state-focus a:link,
  .ui-state-focus a:visited {
    color: #212121;
    text-decoration: none;
  }
  .ui-state-active,
  .ui-widget-content .ui-state-active,
  .ui-widget-header .ui-state-active {
    border: 1px solid #aaaaaa;
    background: #ffffff url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-bg_glass_65_ffffff_1x400.png") 50% 50% repeat-x;
    font-weight: normal;
    color: #212121;
  }
  .ui-state-active a,
  .ui-state-active a:link,
  .ui-state-active a:visited {
    color: #212121;
    text-decoration: none;
  }
  .ui-state-highlight,
  .ui-widget-content .ui-state-highlight,
  .ui-widget-header .ui-state-highlight {
    border: 1px solid #fcefa1;
    background: #fbf9ee url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-bg_glass_55_fbf9ee_1x400.png") 50% 50% repeat-x;
    color: #363636;
  }
  .ui-state-highlight a,
  .ui-widget-content .ui-state-highlight a,
  .ui-widget-header .ui-state-highlight a {
    color: #363636;
  }
  .ui-state-error,
  .ui-widget-content .ui-state-error,
  .ui-widget-header .ui-state-error {
    border: 1px solid #cd0a0a;
    background: #fef1ec url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-bg_glass_95_fef1ec_1x400.png") 50% 50% repeat-x;
    color: #cd0a0a;
  }
  .ui-state-error a,
  .ui-widget-content .ui-state-error a,
  .ui-widget-header .ui-state-error a {
    color: #cd0a0a;
  }
  .ui-state-error-text,
  .ui-widget-content .ui-state-error-text,
  .ui-widget-header .ui-state-error-text {
    color: #cd0a0a;
  }
  .ui-priority-primary,
  .ui-widget-content .ui-priority-primary,
  .ui-widget-header .ui-priority-primary {
    font-weight: bold;
  }
  .ui-priority-secondary,
  .ui-widget-content .ui-priority-secondary,
  .ui-widget-header .ui-priority-secondary {
    opacity: .7;
    /* support: IE8 */
    filter: Alpha(Opacity=70);
    font-weight: normal;
  }
  .ui-state-disabled,
  .ui-widget-content .ui-state-disabled,
  .ui-widget-header .ui-state-disabled {
    opacity: .35;
    /* support: IE8 */
    filter: Alpha(Opacity=35);
    background-image: none;
  }
  .ui-state-disabled .ui-icon {
    /* support: IE8 - See #6059 */
    filter: Alpha(Opacity=35);
  }
  .ui-icon {
    width: 16px;
    height: 16px;
  }
  .ui-icon,
  .ui-widget-content .ui-icon {
    background-image: url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-icons_222222_256x240.png");
  }
  .ui-widget-header .ui-icon {
    background-image: url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-icons_222222_256x240.png");
  }
  .ui-state-default .ui-icon {
    background-image: url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-icons_888888_256x240.png");
  }
  .ui-state-hover .ui-icon,
  .ui-state-focus .ui-icon {
    background-image: url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-icons_454545_256x240.png");
  }
  .ui-state-active .ui-icon {
    background-image: url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-icons_454545_256x240.png");
  }
  .ui-state-highlight .ui-icon {
    background-image: url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-icons_2e83ff_256x240.png");
  }
  .ui-state-error .ui-icon,
  .ui-state-error-text .ui-icon {
    background-image: url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-icons_cd0a0a_256x240.png");
  }
  .ui-icon-blank {
    background-position: 16px 16px;
  }
  .ui-icon-carat-1-n {
    background-position: 0 0;
  }
  .ui-icon-carat-1-ne {
    background-position: -16px 0;
  }
  .ui-icon-carat-1-e {
    background-position: -32px 0;
  }
  .ui-icon-carat-1-se {
    background-position: -48px 0;
  }
  .ui-icon-carat-1-s {
    background-position: -64px 0;
  }
  .ui-icon-carat-1-sw {
    background-position: -80px 0;
  }
  .ui-icon-carat-1-w {
    background-position: -96px 0;
  }
  .ui-icon-carat-1-nw {
    background-position: -112px 0;
  }
  .ui-icon-carat-2-n-s {
    background-position: -128px 0;
  }
  .ui-icon-carat-2-e-w {
    background-position: -144px 0;
  }
  .ui-icon-triangle-1-n {
    background-position: 0 -16px;
  }
  .ui-icon-triangle-1-ne {
    background-position: -16px -16px;
  }
  .ui-icon-triangle-1-e {
    background-position: -32px -16px;
  }
  .ui-icon-triangle-1-se {
    background-position: -48px -16px;
  }
  .ui-icon-triangle-1-s {
    background-position: -64px -16px;
  }
  .ui-icon-triangle-1-sw {
    background-position: -80px -16px;
  }
  .ui-icon-triangle-1-w {
    background-position: -96px -16px;
  }
  .ui-icon-triangle-1-nw {
    background-position: -112px -16px;
  }
  .ui-icon-triangle-2-n-s {
    background-position: -128px -16px;
  }
  .ui-icon-triangle-2-e-w {
    background-position: -144px -16px;
  }
  .ui-icon-arrow-1-n {
    background-position: 0 -32px;
  }
  .ui-icon-arrow-1-ne {
    background-position: -16px -32px;
  }
  .ui-icon-arrow-1-e {
    background-position: -32px -32px;
  }
  .ui-icon-arrow-1-se {
    background-position: -48px -32px;
  }
  .ui-icon-arrow-1-s {
    background-position: -64px -32px;
  }
  .ui-icon-arrow-1-sw {
    background-position: -80px -32px;
  }
  .ui-icon-arrow-1-w {
    background-position: -96px -32px;
  }
  .ui-icon-arrow-1-nw {
    background-position: -112px -32px;
  }
  .ui-icon-arrow-2-n-s {
    background-position: -128px -32px;
  }
  .ui-icon-arrow-2-ne-sw {
    background-position: -144px -32px;
  }
  .ui-icon-arrow-2-e-w {
    background-position: -160px -32px;
  }
  .ui-icon-arrow-2-se-nw {
    background-position: -176px -32px;
  }
  .ui-icon-arrowstop-1-n {
    background-position: -192px -32px;
  }
  .ui-icon-arrowstop-1-e {
    background-position: -208px -32px;
  }
  .ui-icon-arrowstop-1-s {
    background-position: -224px -32px;
  }
  .ui-icon-arrowstop-1-w {
    background-position: -240px -32px;
  }
  .ui-icon-arrowthick-1-n {
    background-position: 0 -48px;
  }
  .ui-icon-arrowthick-1-ne {
    background-position: -16px -48px;
  }
  .ui-icon-arrowthick-1-e {
    background-position: -32px -48px;
  }
  .ui-icon-arrowthick-1-se {
    background-position: -48px -48px;
  }
  .ui-icon-arrowthick-1-s {
    background-position: -64px -48px;
  }
  .ui-icon-arrowthick-1-sw {
    background-position: -80px -48px;
  }
  .ui-icon-arrowthick-1-w {
    background-position: -96px -48px;
  }
  .ui-icon-arrowthick-1-nw {
    background-position: -112px -48px;
  }
  .ui-icon-arrowthick-2-n-s {
    background-position: -128px -48px;
  }
  .ui-icon-arrowthick-2-ne-sw {
    background-position: -144px -48px;
  }
  .ui-icon-arrowthick-2-e-w {
    background-position: -160px -48px;
  }
  .ui-icon-arrowthick-2-se-nw {
    background-position: -176px -48px;
  }
  .ui-icon-arrowthickstop-1-n {
    background-position: -192px -48px;
  }
  .ui-icon-arrowthickstop-1-e {
    background-position: -208px -48px;
  }
  .ui-icon-arrowthickstop-1-s {
    background-position: -224px -48px;
  }
  .ui-icon-arrowthickstop-1-w {
    background-position: -240px -48px;
  }
  .ui-icon-arrowreturnthick-1-w {
    background-position: 0 -64px;
  }
  .ui-icon-arrowreturnthick-1-n {
    background-position: -16px -64px;
  }
  .ui-icon-arrowreturnthick-1-e {
    background-position: -32px -64px;
  }
  .ui-icon-arrowreturnthick-1-s {
    background-position: -48px -64px;
  }
  .ui-icon-arrowreturn-1-w {
    background-position: -64px -64px;
  }
  .ui-icon-arrowreturn-1-n {
    background-position: -80px -64px;
  }
  .ui-icon-arrowreturn-1-e {
    background-position: -96px -64px;
  }
  .ui-icon-arrowreturn-1-s {
    background-position: -112px -64px;
  }
  .ui-icon-arrowrefresh-1-w {
    background-position: -128px -64px;
  }
  .ui-icon-arrowrefresh-1-n {
    background-position: -144px -64px;
  }
  .ui-icon-arrowrefresh-1-e {
    background-position: -160px -64px;
  }
  .ui-icon-arrowrefresh-1-s {
    background-position: -176px -64px;
  }
  .ui-icon-arrow-4 {
    background-position: 0 -80px;
  }
  .ui-icon-arrow-4-diag {
    background-position: -16px -80px;
  }
  .ui-icon-extlink {
    background-position: -32px -80px;
  }
  .ui-icon-newwin {
    background-position: -48px -80px;
  }
  .ui-icon-refresh {
    background-position: -64px -80px;
  }
  .ui-icon-shuffle {
    background-position: -80px -80px;
  }
  .ui-icon-transfer-e-w {
    background-position: -96px -80px;
  }
  .ui-icon-transferthick-e-w {
    background-position: -112px -80px;
  }
  .ui-icon-folder-collapsed {
    background-position: 0 -96px;
  }
  .ui-icon-folder-open {
    background-position: -16px -96px;
  }
  .ui-icon-document {
    background-position: -32px -96px;
  }
  .ui-icon-document-b {
    background-position: -48px -96px;
  }
  .ui-icon-note {
    background-position: -64px -96px;
  }
  .ui-icon-mail-closed {
    background-position: -80px -96px;
  }
  .ui-icon-mail-open {
    background-position: -96px -96px;
  }
  .ui-icon-suitcase {
    background-position: -112px -96px;
  }
  .ui-icon-comment {
    background-position: -128px -96px;
  }
  .ui-icon-person {
    background-position: -144px -96px;
  }
  .ui-icon-print {
    background-position: -160px -96px;
  }
  .ui-icon-trash {
    background-position: -176px -96px;
  }
  .ui-icon-locked {
    background-position: -192px -96px;
  }
  .ui-icon-unlocked {
    background-position: -208px -96px;
  }
  .ui-icon-bookmark {
    background-position: -224px -96px;
  }
  .ui-icon-tag {
    background-position: -240px -96px;
  }
  .ui-icon-home {
    background-position: 0 -112px;
  }
  .ui-icon-flag {
    background-position: -16px -112px;
  }
  .ui-icon-calendar {
    background-position: -32px -112px;
  }
  .ui-icon-cart {
    background-position: -48px -112px;
  }
  .ui-icon-pencil {
    background-position: -64px -112px;
  }
  .ui-icon-clock {
    background-position: -80px -112px;
  }
  .ui-icon-disk {
    background-position: -96px -112px;
  }
  .ui-icon-calculator {
    background-position: -112px -112px;
  }
  .ui-icon-zoomin {
    background-position: -128px -112px;
  }
  .ui-icon-zoomout {
    background-position: -144px -112px;
  }
  .ui-icon-search {
    background-position: -160px -112px;
  }
  .ui-icon-wrench {
    background-position: -176px -112px;
  }
  .ui-icon-gear {
    background-position: -192px -112px;
  }
  .ui-icon-heart {
    background-position: -208px -112px;
  }
  .ui-icon-star {
    background-position: -224px -112px;
  }
  .ui-icon-link {
    background-position: -240px -112px;
  }
  .ui-icon-cancel {
    background-position: 0 -128px;
  }
  .ui-icon-plus {
    background-position: -16px -128px;
  }
  .ui-icon-plusthick {
    background-position: -32px -128px;
  }
  .ui-icon-minus {
    background-position: -48px -128px;
  }
  .ui-icon-minusthick {
    background-position: -64px -128px;
  }
  .ui-icon-close {
    background-position: -80px -128px;
  }
  .ui-icon-closethick {
    background-position: -96px -128px;
  }
  .ui-icon-key {
    background-position: -112px -128px;
  }
  .ui-icon-lightbulb {
    background-position: -128px -128px;
  }
  .ui-icon-scissors {
    background-position: -144px -128px;
  }
  .ui-icon-clipboard {
    background-position: -160px -128px;
  }
  .ui-icon-copy {
    background-position: -176px -128px;
  }
  .ui-icon-contact {
    background-position: -192px -128px;
  }
  .ui-icon-image {
    background-position: -208px -128px;
  }
  .ui-icon-video {
    background-position: -224px -128px;
  }
  .ui-icon-script {
    background-position: -240px -128px;
  }
  .ui-icon-alert {
    background-position: 0 -144px;
  }
  .ui-icon-info {
    background-position: -16px -144px;
  }
  .ui-icon-notice {
    background-position: -32px -144px;
  }
  .ui-icon-help {
    background-position: -48px -144px;
  }
  .ui-icon-check {
    background-position: -64px -144px;
  }
  .ui-icon-bullet {
    background-position: -80px -144px;
  }
  .ui-icon-radio-on {
    background-position: -96px -144px;
  }
  .ui-icon-radio-off {
    background-position: -112px -144px;
  }
  .ui-icon-pin-w {
    background-position: -128px -144px;
  }
  .ui-icon-pin-s {
    background-position: -144px -144px;
  }
  .ui-icon-play {
    background-position: 0 -160px;
  }
  .ui-icon-pause {
    background-position: -16px -160px;
  }
  .ui-icon-seek-next {
    background-position: -32px -160px;
  }
  .ui-icon-seek-prev {
    background-position: -48px -160px;
  }
  .ui-icon-seek-end {
    background-position: -64px -160px;
  }
  .ui-icon-seek-start {
    background-position: -80px -160px;
  }
  .ui-icon-seek-first {
    background-position: -80px -160px;
  }
  .ui-icon-stop {
    background-position: -96px -160px;
  }
  .ui-icon-eject {
    background-position: -112px -160px;
  }
  .ui-icon-volume-off {
    background-position: -128px -160px;
  }
  .ui-icon-volume-on {
    background-position: -144px -160px;
  }
  .ui-icon-power {
    background-position: 0 -176px;
  }
  .ui-icon-signal-diag {
    background-position: -16px -176px;
  }
  .ui-icon-signal {
    background-position: -32px -176px;
  }
  .ui-icon-battery-0 {
    background-position: -48px -176px;
  }
  .ui-icon-battery-1 {
    background-position: -64px -176px;
  }
  .ui-icon-battery-2 {
    background-position: -80px -176px;
  }
  .ui-icon-battery-3 {
    background-position: -96px -176px;
  }
  .ui-icon-circle-plus {
    background-position: 0 -192px;
  }
  .ui-icon-circle-minus {
    background-position: -16px -192px;
  }
  .ui-icon-circle-close {
    background-position: -32px -192px;
  }
  .ui-icon-circle-triangle-e {
    background-position: -48px -192px;
  }
  .ui-icon-circle-triangle-s {
    background-position: -64px -192px;
  }
  .ui-icon-circle-triangle-w {
    background-position: -80px -192px;
  }
  .ui-icon-circle-triangle-n {
    background-position: -96px -192px;
  }
  .ui-icon-circle-arrow-e {
    background-position: -112px -192px;
  }
  .ui-icon-circle-arrow-s {
    background-position: -128px -192px;
  }
  .ui-icon-circle-arrow-w {
    background-position: -144px -192px;
  }
  .ui-icon-circle-arrow-n {
    background-position: -160px -192px;
  }
  .ui-icon-circle-zoomin {
    background-position: -176px -192px;
  }
  .ui-icon-circle-zoomout {
    background-position: -192px -192px;
  }
  .ui-icon-circle-check {
    background-position: -208px -192px;
  }
  .ui-icon-circlesmall-plus {
    background-position: 0 -208px;
  }
  .ui-icon-circlesmall-minus {
    background-position: -16px -208px;
  }
  .ui-icon-circlesmall-close {
    background-position: -32px -208px;
  }
  .ui-icon-squaresmall-plus {
    background-position: -48px -208px;
  }
  .ui-icon-squaresmall-minus {
    background-position: -64px -208px;
  }
  .ui-icon-squaresmall-close {
    background-position: -80px -208px;
  }
  .ui-icon-grip-dotted-vertical {
    background-position: 0 -224px;
  }
  .ui-icon-grip-dotted-horizontal {
    background-position: -16px -224px;
  }
  .ui-icon-grip-solid-vertical {
    background-position: -32px -224px;
  }
  .ui-icon-grip-solid-horizontal {
    background-position: -48px -224px;
  }
  .ui-icon-gripsmall-diagonal-se {
    background-position: -64px -224px;
  }
  .ui-icon-grip-diagonal-se {
    background-position: -80px -224px;
  }
  .ui-corner-all,
  .ui-corner-top,
  .ui-corner-left,
  .ui-corner-tl {
    border-top-left-radius: 4px;
  }
  .ui-corner-all,
  .ui-corner-top,
  .ui-corner-right,
  .ui-corner-tr {
    border-top-right-radius: 4px;
  }
  .ui-corner-all,
  .ui-corner-bottom,
  .ui-corner-left,
  .ui-corner-bl {
    border-bottom-left-radius: 4px;
  }
  .ui-corner-all,
  .ui-corner-bottom,
  .ui-corner-right,
  .ui-corner-br {
    border-bottom-right-radius: 4px;
  }
  .ui-widget-overlay {
    background: #aaaaaa url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-bg_flat_0_aaaaaa_40x100.png") 50% 50% repeat-x;
    opacity: .3;
    /* support: IE8 */
    filter: Alpha(Opacity=30);
  }
  .ui-widget-shadow {
    margin: -8px 0 0 -8px;
    padding: 8px;
    background: #aaaaaa url("/dokuwiki/lib/scripts/jquery/jquery-ui-theme/images/ui-bg_flat_0_aaaaaa_40x100.png") 50% 50% repeat-x;
    opacity: .3;
    /* support: IE8 */
    filter: Alpha(Opacity=30);
    border-radius: 8px;
  }
  div.dokuwiki table.pagelist,
  div.dokuwiki table.ul {
    border: 0;
    padding: 0;
    border-spacing: 0;
    margin-bottom: 1em;
    border-collapse: collapse;
  }
  div.dokuwiki table.pagelist tr {
    border-top: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
  }
  div.dokuwiki table.pagelist th,
  div.dokuwiki table.pagelist td {
    padding: 1px 1em 1px 0;
    border: 0;
  }
  div.dokuwiki table.ul th,
  div.dokuwiki table.ul td {
    padding: 0 1em 0 0;
    border: 0;
  }
  div.dokuwiki table.ul ul {
    margin: 0 0 0 1.5em;
  }
  div.dokuwiki table.pagelist th,
  div.dokuwiki table.ul th {
    background-color: #dee7ec;
  }
  div.dokuwiki th.page,
  div.dokuwiki th.date,
  div.dokuwiki th.user,
  div.dokuwiki th.desc,
  div.dokuwiki th.comments,
  div.dokuwiki th.linkbacks,
  div.dokuwiki th.tags,
  div.dokuwiki td.date,
  div.dokuwiki td.user,
  div.dokuwiki td.desc,
  div.dokuwiki td.comments,
  div.dokuwiki td.linkbacks,
  div.dokuwiki td.tags {
    color: #666;
    font-size: 80%;
  }
  div.dokuwiki td.date {
    text-align: left;
  }
  #acl__tree {
    font-size: 90%;
    width: 25%;
    height: 300px;
    float: left;
    overflow: auto;
    border: 1px solid #ccc;
    text-align: left;
  }
  [dir=rtl] #acl__tree {
    float: right;
    text-align: right;
  }
  #acl__tree a.cur {
    background-color: #ff9;
    font-weight: bold;
  }
  #acl__tree ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  #acl__tree li {
    padding-left: 1em;
    list-style-image: none;
  }
  [dir=rtl] #acl__tree li {
    padding-left: 0em;
    padding-right: 1em;
  }
  #acl__tree ul img {
    margin-right: 0.25em;
    cursor: pointer;
  }
  [dir=rtl] #acl__tree ul img {
    margin-left: 0.25em;
    margin-right: 0em;
  }
  #acl__detail {
    width: 73%;
    height: 300px;
    float: right;
    overflow: auto;
  }
  [dir=rtl] #acl__detail {
    float: left;
  }
  #acl__detail fieldset {
    width: 90%;
  }
  #acl__detail div#acl__user {
    border: 1px solid #ccc;
    padding: 0.5em;
    margin-bottom: 0.6em;
  }
  #acl_manager table.inline {
    width: 100%;
    margin: 0;
  }
  #acl_manager table .check {
    text-align: center;
  }
  #acl_manager table .action {
    text-align: right;
  }
  #acl_manager .aclgroup {
    background: transparent url(/dokuwiki/lib/plugins/acl/pix/group.png) 0px 1px no-repeat;
    padding: 1px 0px 1px 18px;
  }
  [dir=rtl] #acl_manager .aclgroup {
    background: transparent url(/dokuwiki/lib/plugins/acl/pix/group.png) right 1px no-repeat;
    padding: 1px 18px 1px 0px;
  }
  #acl_manager .acluser {
    background: transparent url(/dokuwiki/lib/plugins/acl/pix/user.png) 0px 1px no-repeat;
    padding: 1px 0px 1px 18px;
  }
  [dir=rtl] #acl_manager .acluser {
    background: transparent url(/dokuwiki/lib/plugins/acl/pix/user.png) right 1px no-repeat;
    padding: 1px 18px 1px 0px;
  }
  #acl_manager .aclpage {
    background: transparent url(/dokuwiki/lib/plugins/acl/pix/page.png) 0px 1px no-repeat;
    padding: 1px 0px 1px 18px;
  }
  [dir=rtl] #acl_manager .aclpage {
    background: transparent url(/dokuwiki/lib/plugins/acl/pix/page.png) right 1px no-repeat;
    padding: 1px 18px 1px 0px;
  }
  #acl_manager .aclns {
    background: transparent url(/dokuwiki/lib/plugins/acl/pix/ns.png) 0px 1px no-repeat;
    padding: 1px 0px 1px 18px;
  }
  [dir=rtl] #acl_manager .aclns {
    background: transparent url(/dokuwiki/lib/plugins/acl/pix/ns.png) right 1px no-repeat;
    padding: 1px 18px 1px 0px;
  }
  #acl_manager label.disabled {
    opacity: .5;
    cursor: auto;
  }
  #acl_manager label {
    text-align: left;
    font-weight: normal;
    display: inline;
  }
  #acl_manager table {
    margin-left: 10%;
    width: 80%;
  }
  #acl_manager table tr {
    background-color: inherit;
  }
  #acl_manager table tr:hover {
    background-color: #dee7ec;
  }
  #plugin__upgrade {
    margin: 0 auto;
    height: 20em;
    overflow: auto;
  }
  #plugin__upgrade_form {
    display: block;
    overflow: auto;
    margin: 1em;
    font-size: 120%;
  }
  #plugin__upgrade_form input {
    float: right;
    margin-left: 0.5em;
  }
  #plugin__upgrade_meter {
    height: 20px;
    position: relative;
    margin: 3em 1em 1em 1em;
  }
  #plugin__upgrade_meter ol {
    margin: 0;
    padding: 0;
    display: block;
    height: 100%;
    border-radius: 10px;
    background-color: #ddd;
    position: relative;
    list-style: none;
  }
  #plugin__upgrade_meter ol li {
    float: left;
    margin: 0;
    padding: 0;
    text-align: right;
    width: 19%;
    position: relative;
    border-radius: 10px;
  }
  #plugin__upgrade_meter ol li span {
    right: -0.5em;
    display: block;
    text-align: center;
  }
  #plugin__upgrade_meter ol li .step {
    top: -0.4em;
    padding: .2em 0;
    border: 3px solid #ddd;
    z-index: 99;
    font-size: 1.25em;
    color: #ddd;
    width: 1.5em;
    font-weight: 700;
    position: absolute;
    background-color: #fff;
    border-radius: 50%;
  }
  #plugin__upgrade_meter ol li .stage {
    color: #fff;
    font-weight: 700;
  }
  #plugin__upgrade_meter ol li.active {
    height: 20px;
    background: #aaa;
  }
  #plugin__upgrade_meter ol li.active span.stage {
    color: #000;
  }
  #plugin__upgrade_meter ol li.active span.step {
    color: #000;
    border: 3px solid __link__;
  }
  #user__manager tr.disabled {
    color: #6f6f6f;
    background: #e4e4e4;
  }
  #user__manager tr.user_info {
    vertical-align: top;
  }
  #user__manager div.edit_user {
    width: 46%;
    float: left;
  }
  #user__manager table {
    margin-bottom: 1em;
  }
  #user__manager ul.notes {
    padding-left: 0;
    padding-right: 1.4em;
  }
  #user__manager button[disabled] {
    color: #ccc !important;
    border-color: #ccc !important;
  }
  #user__manager .import_users {
    margin-top: 1.4em;
  }
  #user__manager .import_failures {
    margin-top: 1.4em;
  }
  #user__manager .import_failures td.lineno {
    text-align: center;
  }
  #plugin__styling button.primary {
    font-weight: bold;
  }
  [dir=rtl] #plugin__styling table input {
    text-align: right;
  }
  #plugin__styling_loader {
    display: none;
  }
  div.dokuwiki div.plugin_include_content div.secedit {
    float: right;
    margin-left: 1em;
    margin-top: 0;
  }
  div.dokuwiki div.inclmeta {
    border-top: 1px dotted #ccc;
    padding-top: 0.2em;
    color: #666;
    font-size: 80%;
    /*margin-top: 0.5em;*/
    line-height: 1.25;
    margin-bottom: 2em;
  }
  div.dokuwiki div.inclmeta a.permalink {
    background: transparent url(/dokuwiki/lib/plugins/include/images/link.gif) 0px 1px no-repeat;
    padding: 1px 0px 1px 16px;
  }
  div.dokuwiki div.inclmeta abbr.published {
    background: transparent url(/dokuwiki/lib/plugins/include/images/date.gif) 0px 1px no-repeat;
    padding: 1px 0px 1px 16px;
    border-bottom: 0;
  }
  div.dokuwiki div.inclmeta span.author {
    background: transparent url(/dokuwiki/lib/plugins/include/images/user.gif) 0px 1px no-repeat;
    padding: 1px 0px 1px 16px;
  }
  div.dokuwiki div.inclmeta span.comment {
    background: transparent url(/dokuwiki/lib/plugins/include/images/comment.gif) 0px 1px no-repeat;
    padding: 1px 0px 1px 16px;
  }
  div.dokuwiki div.inclmeta div.tags {
    border-top: 0;
    font-size: 100%;
    float: right;
    clear: none;
  }
  div.dokuwiki p.include_readmore {
    text-align: right;
  }
  div.dokuwiki form#dw__search input.edit {
    width: 50%;
  }
  .dokuwiki .wrap_box {
    background: #dee7ec;
    color: #333;
  }
  .dokuwiki div.wrap_box,
  .dokuwiki div.wrap_danger,
  .dokuwiki div.wrap_warning,
  .dokuwiki div.wrap_caution,
  .dokuwiki div.wrap_notice,
  .dokuwiki div.wrap_safety {
    padding: 1em 1em .5em;
    margin-bottom: 1.5em;
    overflow: hidden;
  }
  .dokuwiki span.wrap_box,
  .dokuwiki span.wrap_danger,
  .dokuwiki span.wrap_warning,
  .dokuwiki span.wrap_caution,
  .dokuwiki span.wrap_notice,
  .dokuwiki span.wrap_safety {
    padding: 0 .3em;
  }
  .dokuwiki div.wrap_info,
  .dokuwiki div.wrap_important,
  .dokuwiki div.wrap_alert,
  .dokuwiki div.wrap_tip,
  .dokuwiki div.wrap_help,
  .dokuwiki div.wrap_todo,
  .dokuwiki div.wrap_download {
    padding: 1em 1em .5em 70px;
    margin-bottom: 1.5em;
    min-height: 68px;
    background-position: 10px 50%;
    background-repeat: no-repeat;
    color: #000;
    overflow: hidden;
  }
  .dokuwiki span.wrap_info,
  .dokuwiki span.wrap_important,
  .dokuwiki span.wrap_alert,
  .dokuwiki span.wrap_tip,
  .dokuwiki span.wrap_help,
  .dokuwiki span.wrap_todo,
  .dokuwiki span.wrap_download {
    padding: 0 2px 0 20px;
    min-height: 20px;
    background-position: 2px 50%;
    background-repeat: no-repeat;
    color: #000;
  }
  [dir=rtl] .dokuwiki div.wrap_info,
  [dir=rtl] .dokuwiki div.wrap_important,
  [dir=rtl] .dokuwiki div.wrap_alert,
  [dir=rtl] .dokuwiki div.wrap_tip,
  [dir=rtl] .dokuwiki div.wrap_help,
  [dir=rtl] .dokuwiki div.wrap_todo,
  [dir=rtl] .dokuwiki div.wrap_download {
    padding: 1em 60px .5em 1em;
    background-position: right 50%;
  }
  [dir=rtl] .dokuwiki span.wrap_info,
  [dir=rtl] .dokuwiki span.wrap_important,
  [dir=rtl] .dokuwiki span.wrap_alert,
  [dir=rtl] .dokuwiki span.wrap_tip,
  [dir=rtl] .dokuwiki span.wrap_help,
  [dir=rtl] .dokuwiki span.wrap_todo,
  [dir=rtl] .dokuwiki span.wrap_download {
    padding: 0 18px 0 2px;
    background-position: right 50%;
  }
  .dokuwiki .wrap_info {
    background-color: #d1d7df;
  }
  .dokuwiki div.wrap_info {
    background-image: url(/dokuwiki/lib/plugins/wrap/images/note/48/info.png);
  }
  .dokuwiki span.wrap_info {
    background-image: url(/dokuwiki/lib/plugins/wrap/images/note/16/info.png);
  }
  .dokuwiki .wrap_important {
    background-color: #ffd39f;
  }
  .dokuwiki div.wrap_important {
    background-image: url(/dokuwiki/lib/plugins/wrap/images/note/48/important.png);
  }
  .dokuwiki span.wrap_important {
    background-image: url(/dokuwiki/lib/plugins/wrap/images/note/16/important.png);
  }
  .dokuwiki .wrap_alert {
    background-color: #ffbcaf;
  }
  .dokuwiki div.wrap_alert {
    background-image: url(/dokuwiki/lib/plugins/wrap/images/note/48/alert.png);
  }
  .dokuwiki span.wrap_alert {
    background-image: url(/dokuwiki/lib/plugins/wrap/images/note/16/alert.png);
  }
  .dokuwiki .wrap_tip {
    background-color: #fff79f;
  }
  .dokuwiki div.wrap_tip {
    background-image: url(/dokuwiki/lib/plugins/wrap/images/note/48/tip.png);
  }
  .dokuwiki span.wrap_tip {
    background-image: url(/dokuwiki/lib/plugins/wrap/images/note/16/tip.png);
  }
  .dokuwiki .wrap_help {
    background-color: #dcc2ef;
  }
  .dokuwiki div.wrap_help {
    background-image: url(/dokuwiki/lib/plugins/wrap/images/note/48/help.png);
  }
  .dokuwiki span.wrap_help {
    background-image: url(/dokuwiki/lib/plugins/wrap/images/note/16/help.png);
  }
  .dokuwiki .wrap_todo {
    background-color: #c2efdd;
  }
  .dokuwiki div.wrap_todo {
    background-image: url(/dokuwiki/lib/plugins/wrap/images/note/48/todo.png);
  }
  .dokuwiki span.wrap_todo {
    background-image: url(/dokuwiki/lib/plugins/wrap/images/note/16/todo.png);
  }
  .dokuwiki .wrap_download {
    background-color: #d6efc2;
  }
  .dokuwiki div.wrap_download {
    background-image: url(/dokuwiki/lib/plugins/wrap/images/note/48/download.png);
  }
  .dokuwiki span.wrap_download {
    background-image: url(/dokuwiki/lib/plugins/wrap/images/note/16/download.png);
  }
  .dokuwiki .wrap_danger {
    background-color: #c00;
    color: #fff;
  }
  .dokuwiki .wrap_warning {
    background-color: #f60;
    color: #000;
  }
  .dokuwiki .wrap_caution {
    background-color: #ff0;
    color: #000;
  }
  .dokuwiki .wrap_notice {
    background-color: #06f;
    color: #fff;
  }
  .dokuwiki .wrap_safety {
    background-color: #090;
    color: #fff;
  }
  .dokuwiki .wrap_hi {
    background-color: #ff9;
    overflow: hidden;
  }
  .dokuwiki .wrap_spoiler {
    background-color: #fff !important;
    color: #fff !important;
    border: 1px dotted red;
  }
  .dokuwiki .wrap_onlyprint {
    display: none;
  }
  .dokuwiki .plugin_wrap.tabs {
    margin-bottom: 1.4em;
  }
  #config__manager div.success,
  #config__manager div.error,
  #config__manager div.info {
    background-position: 0.5em;
    padding: 0.5em;
    text-align: center;
  }
  #config__manager fieldset {
    margin: 1em;
    width: auto;
    margin-bottom: 2em;
    background-color: #dee7ec;
    color: #333;
    padding: 0 1em;
  }
  [dir=rtl] #config__manager fieldset {
    clear: both;
  }
  #config__manager legend {
    font-size: 1.25em;
  }
  #config__manager table {
    margin: 1em 0;
    width: 100%;
  }
  #config__manager fieldset td {
    text-align: left;
  }
  [dir=rtl] #config__manager fieldset td {
    text-align: right;
  }
  #config__manager fieldset td.value {
    width: 31em;
  }
  [dir=rtl] #config__manager label {
    text-align: right;
  }
  [dir=rtl] #config__manager td.value input.checkbox {
    float: right;
    padding-left: 0;
    padding-right: 0.7em;
  }
  [dir=rtl] #config__manager td.value label {
    float: left;
  }
  #config__manager td.label {
    padding: 0.8em 0 0.6em 1em;
    vertical-align: top;
  }
  [dir=rtl] #config__manager td.label {
    padding: 0.8em 1em 0.6em 0;
  }
  #config__manager td.label label {
    clear: left;
    display: block;
  }
  [dir=rtl] #config__manager td.label label {
    clear: right;
  }
  #config__manager td.label img {
    padding: 0 10px;
    vertical-align: middle;
    float: right;
  }
  [dir=rtl] #config__manager td.label img {
    float: left;
  }
  #config__manager td.label span.outkey {
    font-size: 70%;
    margin-top: -1.7em;
    margin-left: -1em;
    display: block;
    background-color: #fff;
    color: #666;
    float: left;
    padding: 0 0.1em;
    position: relative;
    z-index: 1;
  }
  [dir=rtl] #config__manager td.label span.outkey {
    float: right;
    margin-right: 1em;
  }
  #config__manager td input.edit {
    width: 30em;
  }
  #config__manager td .input {
    width: 30.8em;
  }
  #config__manager td textarea.edit {
    width: 27.5em;
    height: 4em;
  }
  #config__manager td textarea.edit:focus {
    height: 10em;
  }
  #config__manager tr .input,
  #config__manager tr input,
  #config__manager tr textarea,
  #config__manager tr select {
    background-color: #fff;
    color: #000;
  }
  #config__manager tr.default .input,
  #config__manager tr.default input,
  #config__manager tr.default textarea,
  #config__manager tr.default select,
  #config__manager .selectiondefault {
    background-color: #ccddff;
    color: #000;
  }
  #config__manager tr.protected .input,
  #config__manager tr.protected input,
  #config__manager tr.protected textarea,
  #config__manager tr.protected select,
  #config__manager tr.protected .selection {
    background-color: #ffcccc !important;
    color: #000 !important;
  }
  #config__manager td.error {
    background-color: red;
    color: #000;
  }
  #config__manager .selection {
    width: 14.8em;
    float: left;
    margin: 0 0.3em 2px 0;
  }
  [dir=rtl] #config__manager .selection {
    width: 14.8em;
    float: right;
    margin: 0 0 2px 0.3em;
  }
  #config__manager .selection label {
    float: right;
    width: 14em;
    font-size: 90%;
  }
  #config__manager .other {
    clear: both;
    padding-top: 0.5em;
  }
  #config__manager .other label {
    padding-left: 2px;
    font-size: 90%;
  }
  #plugin__extensionlightbox {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url(/dokuwiki/lib/plugins/extension/images/overlay.png) repeat;
    text-align: center;
    cursor: pointer;
    z-index: 9999;
  }
  #plugin__extensionlightbox p {
    text-align: right;
    color: #fff;
    margin-right: 20px;
    font-size: 12px;
  }
  #plugin__extensionlightbox img {
    box-shadow: 0 0 25px #111;
    -webkit-box-shadow: 0 0 25px #111;
    -moz-box-shadow: 0 0 25px #111;
    max-width: 90%;
    max-height: 90%;
  }
  #extension__manager ul.tabs li.active a {
    background-color: #dee7ec;
    border-bottom: solid 1px #dee7ec;
    z-index: 2;
  }
  #extension__manager .panelHeader {
    background-color: #dee7ec;
    margin: 0 0 10px 0;
    padding: 10px 10px 8px;
    overflow: hidden;
  }
  #extension__manager div.msg {
    margin: 0.4em 0 0 0;
  }
  #extension__list ul.extensionList {
    margin-left: 0;
    margin-right: 0;
    padding: 0;
    list-style: none;
  }
  #extension__list ul.extensionList li {
    margin: 0 0 .5em;
    padding: 0 0 .5em;
    color: #333;
    border-bottom: 1px solid #ccc;
    overflow: hidden;
  }
  #extension__list button {
    margin-bottom: .3em;
  }
  #extension__list .legend {
    position: relative;
    width: 75%;
    float: left;
  }
  #extension__list .legend > div {
    padding: 0 .5em 0 132px;
    border-right: 1px solid #dee7ec;
    overflow: hidden;
  }
  #extension__list .legend div.screenshot {
    margin-top: 4px;
    margin-left: -132px;
    max-width: 120px;
    float: left;
    position: relative;
  }
  #extension__list .legend div.screenshot img {
    width: 120px;
    height: 70px;
    border-radius: 5px;
    box-shadow: 2px 2px 2px #666;
  }
  #extension__list .legend div.screenshot span {
    min-height: 24px;
    min-width: 24px;
    position: absolute;
    left: 0;
    top: 0;
  }
  #extension__list .legend h2 {
    width: 100%;
    float: right;
    margin: 0.2em 0 0.5em;
    font-size: 100%;
    font-weight: normal;
    border: none;
  }
  #extension__list .legend h2 strong {
    font-size: 120%;
    font-weight: bold;
    vertical-align: baseline;
  }
  #extension__list .legend p {
    margin: 0 0 0.6em 0;
  }
  #extension__list .legend div.popularity {
    background-color: #fff;
    border: 1px solid silver;
    height: .4em;
    margin: 0 auto;
    padding: 1px;
    width: 5.5em;
    position: absolute;
    right: .5em;
    top: 0.2em;
  }
  #extension__list .legend div.popularity div {
    background-color: #ccc;
    height: 100%;
  }
  #extension__list .legend div.linkbar {
    font-size: 85%;
  }
  #extension__list .legend div.linkbar span.tags {
    padding-left: 18px;
    background: transparent url(/dokuwiki/lib/plugins/extension/images/tag.png) no-repeat 0 0;
  }
  #extension__list .legend div.linkbar a.bugs {
    padding-left: 18px;
    background: transparent url(/dokuwiki/lib/plugins/extension/images/bug.gif) no-repeat 0 0;
  }
  #extension__list .legend a.info {
    background: transparent url(/dokuwiki/lib/plugins/extension/images/down.png) no-repeat 0 0;
    border-width: 0;
    height: 13px;
    width: 13px;
    text-indent: -9999px;
    float: right;
    margin: .5em 0 0;
    overflow: hidden;
  }
  #extension__list .legend a.info.close {
    background: transparent url(/dokuwiki/lib/plugins/extension/images/up.png) no-repeat 0 0;
  }
  #extension__list .legend dl.details {
    margin: 0.4em 0 0 0;
    font-size: 85%;
    border-top: 1px solid #dee7ec;
    clear: both;
  }
  #extension__list .legend dl.details dt {
    clear: left;
    float: left;
    width: 25%;
    margin: 0;
    text-align: right;
    font-weight: normal;
    padding: 0.2em 5px 0 0;
    font-weight: bold;
  }
  #extension__list .legend dl.details dd {
    margin-left: 25%;
    padding: 0.2em 0 0 5px;
  }
  #extension__list .legend dl.details dd a.donate {
    padding-left: 18px;
    background: transparent url(/dokuwiki/lib/plugins/extension/images/donate.png) left center no-repeat;
  }
  [dir=rtl] #extension__list .legend {
    float: right;
  }
  [dir=rtl] #extension__list .legend > div {
    padding: 0 132px 0 .5em;
    border-left: 1px solid #dee7ec;
    border-right-width: 0;
  }
  [dir=rtl] #extension__list .legend div.screenshot {
    margin-left: 0;
    margin-right: -132px;
    float: right;
  }
  [dir=rtl] #extension__list .legend div.screenshot span {
    left: auto;
    right: 0;
  }
  [dir=rtl] #extension__list .legend h2 {
    float: left;
  }
  [dir=rtl] #extension__list .legend div.popularity {
    right: auto;
    left: .5em;
  }
  [dir=rtl] #extension__list .legend div.linkbar span.tags,
  [dir=rtl] #extension__list .legend dl.details dd a.donate {
    padding-left: 0;
    padding-right: 18px;
    background-position: top right;
  }
  [dir=rtl] #extension__list .legend a.info {
    float: left;
  }
  [dir=rtl] #extension__list .legend dl.details dt {
    clear: right;
    float: right;
    text-align: left;
    padding-left: 5px;
    padding-right: 0;
  }
  [dir=rtl] #extension__list .legend dl.details dd {
    margin-left: 0;
    margin-right: 25%;
    padding-left: 0;
    padding-right: 5px;
  }
  #extension__list.hasDisplayOptions .enabled,
  #extension__list.hasDisplayOptions .disabled,
  #extension__list.hasDisplayOptions .updatable {
    display: none;
  }
  #extension__list.hasDisplayOptions.enabled .enabled,
  #extension__list.hasDisplayOptions.disabled .disabled,
  #extension__list.hasDisplayOptions.updatable .updatable {
    display: block;
  }
  #extension__list .enabled div.screenshot span {
    background: transparent url(/dokuwiki/lib/plugins/extension/images/enabled.png) no-repeat 2px 2px;
  }
  #extension__list .disabled div.screenshot span {
    background: transparent url(/dokuwiki/lib/plugins/extension/images/disabled.png) no-repeat 2px 2px;
  }
  #extension__list .disabled .legend {
    opacity: 0.7;
  }
  #extension__manager .actions {
    padding: 0;
    font-size: 95%;
    width: 25%;
    float: right;
    text-align: right;
  }
  #extension__manager .actions .version {
    display: block;
  }
  #extension__manager .actions p {
    margin: 0.2em 0;
    text-align: center;
  }
  #extension__manager .actions p.permerror {
    margin-left: 0.4em;
    text-align: left;
    padding-left: 19px;
    background: transparent url(/dokuwiki/lib/plugins/extension/images/warning.png) center left no-repeat;
    line-height: 18px;
    font-size: 12px;
  }
  [dir=rtl] #extension__manager .actions {
    float: left;
    text-align: left;
  }
  [dir=rtl] #extension__manager .actions p.permerror {
    margin-left: 0;
    margin-right: 0.4em;
    text-align: right;
    padding-left: 0;
    padding-right: 19px;
    background-position: center right;
  }
  #extension__manager form.search {
    display: block;
    margin-bottom: 2em;
  }
  #extension__manager form.search span {
    font-weight: bold;
  }
  #extension__manager form.search input.edit {
    width: 25em;
  }
  #extension__manager form.install {
    text-align: center;
    display: block;
    width: 60%;
  }
  #extension__viewoptions label {
    margin-left: 1em;
    vertical-align: baseline;
  }
  div.dokuwiki div.tags {
    border-top: 2px dotted #ccc;
    font-size: 95%;
    text-align: right;
    clear: both;
    margin-bottom: 1.4em;
  }
  div.dokuwiki div.tags span {
    background: transparent url(/dokuwiki/lib/plugins/tag/images/tag.gif) 0px 1px no-repeat;
    padding: 1px 0px 1px 16px;
  }
  div.dokuwiki form.plugin__tag_search label.plus,
  div.dokuwiki form.plugin__tag_search label.minus {
    display: block;
  }
  div.dokuwiki .header {
    padding: 3px 0 0 2px;
  }
  div.dokuwiki .pagename {
    float: left;
    font-size: 200%;
    font-weight: bolder;
    color: #dee7ec;
    text-align: left;
    vertical-align: middle;
  }
  div.dokuwiki .pagename a {
    color: #436976 !important;
    text-decoration: none !important;
  }
  div.dokuwiki .logo {
    float: right;
    font-size: 220%;
    font-weight: bolder;
    text-align: right;
    vertical-align: middle;
  }
  div.dokuwiki .logo a {
    color: #dee7ec !important;
    text-decoration: none !important;
    font-variant: small-caps;
    letter-spacing: 2pt;
  }
  div.dokuwiki .bar {
    border-top: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    background: #dee7ec;
    padding: 0.1em 0.15em;
    clear: both;
  }
  div.dokuwiki .bar-left {
    float: left;
  }
  div.dokuwiki .bar-right {
    float: right;
    text-align: right;
  }
  div.dokuwiki #bar__bottom {
    margin-bottom: 3px;
  }
  div.dokuwiki div.meta {
    clear: both;
    margin-top: 1em;
    color: #638c9c;
    font-size: 70%;
  }
  div.dokuwiki div.meta div.user {
    float: left;
  }
  div.dokuwiki div.meta div.doc {
    text-align: right;
  }
  * {
    padding: 0;
    margin: 0;
  }
  body {
    font: 80% "Lucida Grande", Verdana, Lucida, Helvetica, Arial, sans-serif;
    background-color: #fff;
    color: #333;
  }
  div.dokuwiki div.page {
    margin: 4px 2em 0 1em;
    text-align: justify;
  }
  div.dokuwiki table {
    font-size: 100%;
  }
  div.dokuwiki img {
    border: 0;
  }
  div.dokuwiki p,
  div.dokuwiki blockquote,
  div.dokuwiki table,
  div.dokuwiki pre {
    margin: 0 0 1.0em 0;
  }
  div.dokuwiki hr {
    border: 0px;
    border-top: 1px solid #ccc;
    text-align: center;
    height: 0px;
  }
  div.dokuwiki div.nothing {
    text-align: center;
    margin: 2em;
  }
  div.dokuwiki form {
    border: none;
    display: inline;
  }
  div.dokuwiki label.block {
    display: block;
    text-align: right;
    font-weight: bold;
  }
  div.dokuwiki label.simple {
    display: block;
    text-align: left;
    font-weight: normal;
  }
  div.dokuwiki label.block input.edit {
    width: 50%;
  }
  div.dokuwiki fieldset {
    width: 300px;
    text-align: center;
    border: 1px solid #ccc;
    padding: 0.5em;
    margin: auto;
  }
  div.dokuwiki textarea.edit {
    /* second generic font fixes problem with font-size, see
     http://meyerweb.com/eric/thoughts/2010/02/12/fixed-monospace-sizing/ */
    font-family: monospace, serif;
    font-size: 100%;
    color: #333;
    background-color: #fff;
    border: 1px solid #ccc;
    /* should just be "width: 100%", but IE8 doesn't like it, see FS#1910 + FS#1667 */
    padding: 0.3em 0 0 0.3em;
    width: 700px;
    min-width: 100%;
    max-width: 100%;
  }
  html>body div.dokuwiki textarea.edit {
    background: #fff url(/dokuwiki/lib/tpl/arctic/images/inputshadow.png) repeat-x top;
  }
  div.dokuwiki input.edit,
  div.dokuwiki select.edit {
    font-size: 100%;
    border: 1px solid #ccc;
    color: #333;
    background-color: #fff;
    vertical-align: middle;
    margin: 1px;
    padding: 0.20em 0.3em;
    display: inline;
  }
  html>body div.dokuwiki input.edit,
  html>body div.dokuwiki select.edit {
    background: #fff url(/dokuwiki/lib/tpl/arctic/images/inputshadow.png) repeat-x top;
  }
  div.dokuwiki select.edit {
    padding: 0.1em 0;
  }
  div.dokuwiki input.missing {
    font-size: 100%;
    border: 1px solid #ccc;
    color: #333;
    background-color: #ffcccc;
    vertical-align: middle;
    margin: 1px;
    padding: 0.20em 0.3em;
    display: inline;
  }
  div.dokuwiki textarea.edit[disabled],
  div.dokuwiki textarea.edit[readonly],
  div.dokuwiki input.edit[disabled],
  div.dokuwiki input.edit[readonly],
  div.dokuwiki input.button[disabled],
  div.dokuwiki select.edit[disabled] {
    background-color: #f5f5f5 !important;
    color: #666 !important;
  }
  div.dokuwiki div.toolbar,
  div.dokuwiki div#wiki__editbar {
    margin: 2px 0;
    text-align: left;
  }
  div.dokuwiki div#size__ctl {
    float: right;
    width: 60px;
    height: 2.7em;
  }
  div.dokuwiki #size__ctl img {
    cursor: pointer;
  }
  div.dokuwiki div#wiki__editbar div.editButtons {
    float: left;
    padding: 0 1.0em 0.7em 0;
  }
  div.dokuwiki div#wiki__editbar div.summary {
    float: left;
  }
  div.dokuwiki .nowrap {
    white-space: nowrap;
  }
  div.dokuwiki div#draft__status {
    float: right;
    color: #638c9c;
  }
  div.dokuwiki div.license {
    padding: 0.5em;
    font-size: 90%;
    text-align: center;
  }
  div.dokuwiki form#dw__editform div.license {
    clear: left;
    font-size: 90%;
  }
  div.dokuwiki input.button,
  div.dokuwiki button.button {
    border: 1px solid #ccc;
    color: #333;
    background-color: #fff;
    vertical-align: middle;
    text-decoration: none;
    font-size: 100%;
    cursor: pointer;
    margin: 1px;
    padding: 0.125em 0.4em;
  }
  html>body div.dokuwiki input.button,
  html>body div.dokuwiki button.button {
    background: #fff url(/dokuwiki/lib/tpl/arctic/images/buttonshadow.png) repeat-x bottom;
  }
  * html div.dokuwiki input.button,
  * html div.dokuwiki button.button {
    height: 1.8em;
  }
  div.dokuwiki div.secedit input.button {
    border: 1px solid #ccc;
    color: #333;
    background-color: #fff;
    vertical-align: middle;
    text-decoration: none;
    margin: 0;
    padding: 0;
    font-size: 10px;
    cursor: pointer;
    float: right;
    display: inline;
  }
  div.dokuwiki div.pagenav {
    margin: 1em 0 0 0;
  }
  div.dokuwiki div.pagenav-prev {
    text-align: right;
    float: left;
    width: 49%;
  }
  div.dokuwiki div.pagenav-next {
    text-align: left;
    float: right;
    width: 49%;
  }
  div.dokuwiki form#dw__recent select {
    margin-bottom: 10px;
  }
  div.dokuwiki a:link,
  div.dokuwiki a:visited {
    color: #436976;
    text-decoration: none;
  }
  div.dokuwiki a:hover,
  div.dokuwiki a:active {
    color: #333;
    text-decoration: underline;
  }
  div.dokuwiki a.nolink {
    color: #333 !important;
    text-decoration: none !important;
  }
  div.dokuwiki a.urlextern {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/link_icon.gif) 0px 1px no-repeat;
    padding: 1px 0px 1px 16px;
  }
  div.dokuwiki a.windows {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/windows.gif) 0px 1px no-repeat;
    padding: 1px 0px 1px 16px;
  }
  div.dokuwiki a.urlextern:link,
  div.dokuwiki a.windows:link,
  div.dokuwiki a.interwiki:link {
    color: #436976;
  }
  div.dokuwiki a.urlextern:visited,
  div.dokuwiki a.windows:visited,
  div.dokuwiki a.interwiki:visited {
    color: purple;
  }
  div.dokuwiki a.urlextern:hover,
  div.dokuwiki a.urlextern:active,
  div.dokuwiki a.windows:hover,
  div.dokuwiki a.windows:active,
  div.dokuwiki a.interwiki:hover,
  div.dokuwiki a.interwiki:active {
    color: #333;
  }
  div.dokuwiki a.mail {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/mail_icon.gif) 0px 1px no-repeat;
    padding: 1px 0px 1px 16px;
  }
  div.dokuwiki a.wikilink1 {
    color: #56b04f !important;
  }
  div.dokuwiki a.wikilink2 {
    color: #ed5353 !important;
    text-decoration: none !important;
    border-bottom: dashed 1px #ed5353 !important;
  }
  div.dokuwiki div.preview {
    background-color: #f5f5f5;
    margin: 0 0 0 2em;
    padding: 4px;
    border: 1px dashed #333;
  }
  div.dokuwiki div.breadcrumbs {
    background-color: #f5f5f5;
    color: #666;
    font-size: 80%;
    padding: 0 0 0 4px;
  }
  div.dokuwiki span.user {
    color: #ccc;
    font-size: 90%;
  }
  div.dokuwiki li.minor {
    color: #666;
    font-style: italic;
  }
  div.dokuwiki img.media {
    margin: 3px;
  }
  div.dokuwiki img.medialeft {
    border: 0;
    float: left;
    margin: 0 1.5em 0 0;
  }
  div.dokuwiki img.mediaright {
    border: 0;
    float: right;
    margin: 0 0 0 1.5em;
  }
  div.dokuwiki img.mediacenter {
    border: 0;
    display: block;
    margin: 0 auto;
  }
  div.dokuwiki img.icon {
    vertical-align: middle;
  }
  div.dokuwiki abbr {
    cursor: help;
    border-bottom: 1px dotted #333;
  }
  div.dokuwiki h1,
  div.dokuwiki h2,
  div.dokuwiki h3,
  div.dokuwiki h4,
  div.dokuwiki h5 {
    color: #333;
    background-color: inherit;
    font-size: 100%;
    font-weight: normal;
    margin: 0 0 1em 0;
    padding: 0.5em 0 0 0;
    border-bottom: 1px solid #ccc;
    clear: left;
  }
  div.dokuwiki h1 {
    font-size: 160%;
    margin-left: 0px;
    font-weight: bold;
  }
  div.dokuwiki h2 {
    font-size: 150%;
    margin-left: 20px;
  }
  div.dokuwiki h3 {
    font-size: 140%;
    margin-left: 40px;
    border-bottom: none;
    font-weight: bold;
  }
  div.dokuwiki h4 {
    font-size: 120%;
    margin-left: 60px;
    border-bottom: none;
    font-weight: bold;
  }
  div.dokuwiki h5 {
    font-size: 100%;
    margin-left: 80px;
    border-bottom: none;
    font-weight: bold;
  }
  div.dokuwiki div.level1 {
    margin-left: 3px;
  }
  div.dokuwiki div.level2 {
    margin-left: 23px;
  }
  div.dokuwiki div.level3 {
    margin-left: 43px;
  }
  div.dokuwiki div.level4 {
    margin-left: 63px;
  }
  div.dokuwiki div.level5 {
    margin-left: 83px;
  }
  div.dokuwiki ul {
    line-height: 1.5em;
    list-style-type: square;
    list-style-image: none;
    margin: 0 0 1em 3.5em;
    color: #638c9c;
  }
  div.dokuwiki ol {
    line-height: 1.5em;
    list-style-image: none;
    margin: 0 0 1em 3.5em;
    color: #638c9c;
    font-weight: bold;
  }
  div.dokuwiki li ul,
  div.dokuwiki li ol {
    margin: 0 0 0 1.5em;
  }
  div.dokuwiki .li {
    color: #333;
    font-weight: normal;
  }
  div.dokuwiki ol {
    list-style-type: decimal;
  }
  div.dokuwiki ol ol {
    list-style-type: upper-roman;
  }
  div.dokuwiki ol ol ol {
    list-style-type: lower-alpha;
  }
  div.dokuwiki ol ol ol ol {
    list-style-type: lower-greek;
  }
  div.dokuwiki li.open {
    /*list-style-type: circle;*/
    list-style-image: url(/dokuwiki/lib/tpl/arctic/images/open.gif);
  }
  div.dokuwiki li.closed {
    /*list-style-type: disc;*/
    list-style-image: url(/dokuwiki/lib/tpl/arctic/images/closed.gif);
  }
  div.dokuwiki blockquote {
    border-left: 2px solid #ccc;
    padding-left: 3px;
  }
  div.dokuwiki pre,
  div.dokuwiki code {
    /* second generic font fixes problem with font-size, see
     http://meyerweb.com/eric/thoughts/2010/02/12/fixed-monospace-sizing/ */
    font-family: monospace, serif;
    font-size: 100%;
  }
  div.dokuwiki pre {
    padding: 0.5em;
    border: 1px dashed #ccc;
    color: #333;
    overflow: auto;
  }
  div.dokuwiki pre.pre {
    background-color: #f7f9fa;
  }
  div.dokuwiki pre.code {
    background-color: #f7f9fa;
  }
  div.dokuwiki pre.file {
    background-color: #dee7ec;
  }
  div.dokuwiki dl.file,
  div.dokuwiki dl.code {
    margin-top: 2em;
    margin-bottom: 2.5em;
  }
  div.dokuwiki dl.file dt,
  div.dokuwiki dl.code dt {
    border: 1px dashed #ccc;
    display: inline;
    padding: 0.1em 1em;
    margin-left: 2em;
  }
  div.dokuwiki dl.code dt a,
  div.dokuwiki dl.file dt a {
    color: #333;
  }
  div.dokuwiki dl.code dt {
    background-color: #f7f9fa;
    border-bottom: 1px solid #f7f9fa;
  }
  div.dokuwiki dl.file dt {
    background-color: #dee7ec;
    border-bottom: 1px solid #dee7ec;
  }
  div.dokuwiki table.inline {
    background-color: #fff;
    border-spacing: 0px;
    border-collapse: collapse;
  }
  div.dokuwiki table.inline th {
    padding: 3px;
    border: 1px solid #ccc;
    background-color: #dee7ec;
  }
  div.dokuwiki table.inline td {
    padding: 3px;
    border: 1px solid #ccc;
  }
  div.dokuwiki #dw__toc {
    margin: 1.2em 0 0 2em;
    float: right;
    width: 200px;
    font-size: 80%;
    clear: both;
  }
  div.dokuwiki #dw__toc h3 {
    border: 1px solid #ccc;
    background-color: #dee7ec;
    text-align: left;
    font-weight: bold;
    padding: 3px;
    margin: 0 0 2px 0;
    font-size: 1em;
  }
  div.dokuwiki .toggle strong {
    border: 0.4em solid #dee7ec;
    float: right;
    display: block;
    margin: 0.4em 3px 0 0;
  }
  div.dokuwiki .toggle span {
    display: none;
  }
  div.dokuwiki .toggle.closed strong {
    margin-top: 0.4em;
    border-top: 0.4em solid #333;
  }
  div.dokuwiki .toggle.open strong {
    margin-top: 0;
    border-bottom: 0.4em solid #333;
  }
  div.dokuwiki #dw__toc > div {
    border: 1px solid #ccc;
    background-color: #fff;
    text-align: left;
    padding: 0.5em 0 0.7em 0;
  }
  div.dokuwiki #dw__toc ul {
    list-style-type: none;
    list-style-image: none;
    line-height: 1.2em;
    padding-left: 1em;
    margin: 0;
  }
  div.dokuwiki #dw__toc ul li {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tocdot2.gif) 0 0.6em no-repeat;
    padding-left: 0.4em;
  }
  div.dokuwiki #dw__toc ul li.clear {
    background-image: none;
    padding-left: 0.4em;
  }
  div.dokuwiki #dw__toc a:link,
  div.dokuwiki #dw__toc a:visited {
    color: #436976;
  }
  div.dokuwiki #dw__toc a:hover,
  div.dokuwiki #dw__toc a:active {
    color: #333;
  }
  div.dokuwiki table.diff {
    background-color: #fff;
    width: 100%;
  }
  div.dokuwiki td.diff-blockheader {
    font-weight: bold;
  }
  div.dokuwiki table.diff th {
    border-bottom: 1px solid #ccc;
    font-size: 110%;
    width: 50%;
    font-weight: normal;
    text-align: left;
  }
  div.dokuwiki table.diff th a {
    font-weight: bold;
  }
  div.dokuwiki table.diff th span.user {
    color: #333;
    font-size: 80%;
  }
  div.dokuwiki table.diff th span.sum {
    font-size: 80%;
    font-weight: bold;
  }
  div.dokuwiki table.diff th.minor {
    font-style: italic;
  }
  div.dokuwiki table.diff td {
    font-family: monospace;
    font-size: 100%;
  }
  div.dokuwiki td.diff-addedline,
  div.dokuwiki span.diff-addedline {
    background-color: #ddffdd;
  }
  div.dokuwiki td.diff-deletedline,
  div.dokuwiki span.diff-deletedline {
    background-color: #ffffbb;
  }
  div.dokuwiki td.diff-context {
    background-color: #f5f5f5;
  }
  div.dokuwiki table.diff td.diff-addedline strong,
  div.dokuwiki table.diff td.diff-deletedline strong {
    color: red;
  }
  div.dokuwiki div.footnotes {
    clear: both;
    border-top: 1px solid #ccc;
    padding-left: 1em;
    margin-top: 1em;
  }
  div.dokuwiki div.fn {
    font-size: 90%;
  }
  div.dokuwiki a.fn_bot {
    font-weight: bold;
  }
  div.insitu-footnote {
    font-size: 80%;
    line-height: 1.2em;
    border: 1px solid #ccc;
    background-color: #f7f9fa;
    text-align: left;
    padding: 4px;
    /* IE's width is handled in javascript */
    max-width: 40%;
    min-width: 5em;
  }
  * html .insitu-footnote pre.code,
  * html .insitu-footnote pre.file {
    padding-bottom: 18px;
  }
  #dw__loading {
    text-align: center;
    margin-bottom: 1em;
  }
  div.dokuwiki .search_results {
    padding: 0 10px 0 30px;
  }
  div.dokuwiki .search_results dt {
    margin-bottom: 3px;
  }
  div.dokuwiki .search_results dd {
    margin-bottom: 6px;
    color: #ccc;
    font-size: 12px;
    margin-left: 20px;
  }
  div.dokuwiki .search_sep {
    color: #333;
  }
  div.dokuwiki .search_hit {
    color: #333;
    background-color: #ff9;
  }
  div.dokuwiki strong.search_hit {
    font-weight: normal;
  }
  div.dokuwiki div.search_quickresult {
    margin: 0 0 15px 30px;
    padding: 0 10px 10px 0;
    border-bottom: 1px dashed #ccc;
  }
  div.dokuwiki div.search_quickresult h3 {
    margin: 0 0 1.0em 0;
    font-size: 1em;
    font-weight: bold;
  }
  div.dokuwiki ul.search_quickhits {
    margin: 0 0 0.5em 1.0em;
  }
  div.dokuwiki ul.search_quickhits li {
    margin: 0 1.0em 0 1.0em;
    float: left;
    width: 30%;
  }
  div.dokuwiki .section_highlight {
    background-color: #dee7ec !important;
  }
  div.footerinc {
    text-align: center;
  }
  .footerinc a img {
    opacity: 0.5;
    border: 0;
  }
  .footerinc a:hover img {
    opacity: 1;
  }
  div.dokuwiki div.ajax_qsearch {
    position: absolute;
    right: 237px;
    width: 200px;
    opacity: 0.9;
    display: none;
    font-size: 80%;
    line-height: 1.2em;
    border: 1px solid #ccc;
    background-color: #f7f9fa;
    text-align: left;
    padding: 4px;
  }
  button.toolbutton {
    background-color: #fff;
    padding: 0px;
    margin: 0 1px 0 0;
    border: 1px solid #ccc;
    cursor: pointer;
  }
  html>body button.toolbutton {
    background: #fff url(/dokuwiki/lib/tpl/arctic/images/buttonshadow.png) repeat-x bottom;
  }
  div.picker {
    width: 250px;
    border: 1px solid #ccc;
    background-color: #dee7ec;
  }
  div.pk_hl {
    width: 125px;
  }
  button.pickerbutton {
    padding: 0px;
    margin: 0 1px 1px 0;
    border: 0;
    background-color: transparent;
    font-size: 80%;
    cursor: pointer;
  }
  div.dokuwiki div.img_big {
    float: left;
    margin-right: 0.5em;
  }
  div.dokuwiki dl.img_tags dt {
    font-weight: bold;
    background-color: #dee7ec;
  }
  div.dokuwiki dl.img_tags dd {
    background-color: #f5f5f5;
  }
  div.dokuwiki div.imagemeta {
    color: #666;
    font-size: 70%;
    line-height: 95%;
  }
  div.dokuwiki div.imagemeta img.thumb {
    float: left;
    margin-right: 0.1em;
  }
  #media__manager {
    height: 100%;
    overflow: hidden;
  }
  #media__left {
    width: 30%;
    border-right: solid 1px #ccc;
    height: 100%;
    overflow: auto;
    position: absolute;
    left: 0;
  }
  #media__right {
    width: 69.7%;
    height: 100%;
    overflow: auto;
    position: absolute;
    right: 0;
  }
  #media__manager h1 {
    margin: 0;
    padding: 0;
    margin-bottom: 0.5em;
  }
  #media__manager a.select {
    cursor: pointer;
  }
  #media__tree img {
    float: left;
    padding: 0.5em 0.3em 0 0;
  }
  [dir=rtl] #media__tree img {
    float: right;
    padding: 0.5em 0 0 0.3em;
  }
  #media__tree ul {
    list-style-type: none;
    list-style-image: none;
    margin-left: 1.5em;
  }
  [dir=rtl] #media__tree ul {
    margin-left: 0;
    margin-right: 1.5em;
  }
  #media__tree li {
    clear: left;
    list-style-type: none;
    list-style-image: none;
  }
  [dir=rtl] #media__tree li {
    clear: right;
  }
  *+html #media__tree li,
  * html #media__tree li {
    border: 1px solid #fff;
  }
  #media__opts {
    padding-left: 1em;
    margin-bottom: 0.5em;
  }
  #media__opts input {
    float: left;
    display: block;
    margin-top: 4px;
    position: absolute;
  }
  *+html #media__opts input,
  * html #media__opts input {
    position: static;
  }
  #media__opts label {
    display: block;
    float: left;
    margin-left: 20px;
    margin-bottom: 4px;
  }
  *+html #media__opts label,
  * html #media__opts label {
    margin-left: 10px;
  }
  #media__opts br {
    clear: left;
  }
  #media__content img.load {
    margin: 1em auto;
  }
  #media__content #scroll__here {
    border: 1px dashed #ccc;
  }
  #media__content .odd {
    background-color: #f7f9fa;
    padding: 0.4em;
  }
  #media__content .even {
    padding: 0.4em;
  }
  #media__content a.mediafile {
    margin-right: 1.5em;
    font-weight: bold;
  }
  #media__content div.detail {
    padding: 0.3em 0 0.3em 2em;
  }
  #media__content div.detail div.thumb {
    float: left;
    width: 130px;
    text-align: center;
    margin-right: 0.4em;
  }
  #media__content img.btn {
    vertical-align: text-bottom;
  }
  #media__content div.example {
    color: #666;
    margin-left: 1em;
  }
  #media__content div.upload {
    font-size: 90%;
    padding: 0 0.5em 0.5em 0.5em;
  }
  #media__content #mediamanager__uploader {
    display: block;
    border-bottom: solid 1px #ccc;
    padding: 0 0.5em 1em 0.5em;
  }
  #media__content form#dw__upload {
    border-bottom: 0;
  }
  #media__content form#dw__upload fieldset {
    padding: 0;
    margin: 0;
    border: none;
    width: auto;
  }
  #media__content form#dw__upload p {
    text-align: left;
    padding: 0.25em 0;
    margin: 0;
    line-height: 1.0em;
  }
  #media__content form#dw__upload label.check {
    float: none;
    width: auto;
    margin-left: 11.5em;
  }
  #media__content form.meta {
    display: block;
    padding: 0 0 1em 0;
  }
  #media__content form.meta label {
    display: block;
    width: 25%;
    float: left;
    font-weight: bold;
    margin-left: 1em;
    clear: left;
  }
  #media__content form.meta .edit {
    font: 100% "Lucida Grande", Verdana, Lucida, Helvetica, Arial, sans-serif;
    float: left;
    width: 70%;
    padding-right: 0;
    padding-left: 0.2em;
    margin: 2px;
  }
  #media__content form.meta textarea.edit {
    height: 8em;
  }
  #media__content form.meta div.metafield {
    clear: left;
  }
  #media__content form.meta div.buttons {
    clear: left;
    margin-left: 20%;
    padding-left: 1em;
  }
  #media__popup_content p {
    margin: 0 0 .5em;
  }
  #media__popup_content label {
    float: left;
    width: 9em;
  }
  #media__popup_content .button {
    margin-right: 1px;
    cursor: pointer;
  }
  #media__popup_content input.button {
    margin-left: 9em;
  }
  #admin__version {
    clear: left;
    float: right;
    color: #666;
  }
  .dokuwiki ul.admin_tasks {
    font-size: 115%;
    float: left;
    width: 40%;
    list-style-type: none;
  }
  .dokuwiki ul.admin_tasks li {
    line-height: 22px;
    padding-left: 35px;
    margin: 1em 0;
    background: transparent none no-repeat scroll 0 0;
    text-align: left;
  }
  .dokuwiki ul.admin_tasks li div.li {
    font-weight: bold;
  }
  .dokuwiki ul.admin_tasks li.admin_acl {
    background-image: url(/dokuwiki/lib/tpl/arctic/../../images/admin/acl.png);
  }
  .dokuwiki ul.admin_tasks li.admin_usermanager {
    background-image: url(/dokuwiki/lib/tpl/arctic/../../images/admin/usermanager.png);
  }
  .dokuwiki ul.admin_tasks li.admin_plugin {
    background-image: url(/dokuwiki/lib/tpl/arctic/../../images/admin/plugin.png);
  }
  .dokuwiki ul.admin_tasks li.admin_config {
    background-image: url(/dokuwiki/lib/tpl/arctic/../../images/admin/config.png);
  }
  .dokuwiki ul.admin_tasks li.admin_revert {
    background-image: url(/dokuwiki/lib/tpl/arctic/../../images/admin/revert.png);
  }
  .dokuwiki ul.admin_tasks li.admin_popularity {
    background-image: url(/dokuwiki/lib/tpl/arctic/../../images/admin/popularity.png);
  }
  #link__wiz_result {
    background-color: #fff;
    width: 293px;
    height: 193px;
    overflow: auto;
    border: 1px solid #ccc;
    margin: 3px auto;
    text-align: left;
  }
  #link__wiz_result div.type_u {
    padding: 3px 3px 3px 22px;
    background: transparent url(/dokuwiki/lib/tpl/arctic/../../images/up.png) 3px 3px no-repeat;
  }
  #link__wiz_result div.type_f {
    padding: 3px 3px 3px 22px;
    background: transparent url(/dokuwiki/lib/tpl/arctic/../../images/page.png) 3px 3px no-repeat;
  }
  #link__wiz_result div.type_d {
    padding: 3px 3px 3px 22px;
    background: transparent url(/dokuwiki/lib/tpl/arctic/../../images/ns.png) 3px 3px no-repeat;
  }
  #link__wiz_result div.even {
    background-color: #f5f5f5;
  }
  #link__wiz_result div.selected {
    background-color: #dee7ec;
  }
  #link__wiz_result span {
    display: block;
    color: #666;
  }
  form#subscribe__form {
    display: block;
    width: 300px;
    text-align: center;
  }
  form#subscribe__form fieldset {
    text-align: left;
    margin: 0.5em 0;
  }
  form#subscribe__form label {
    display: block;
    margin: 0 0.5em 0.5em;
  }
  #mediamanager__page h1 {
    margin: 0 0 .5em;
  }
  #mediamanager__page {
    min-width: 800px;
    width: 100%;
    text-align: left;
  }
  #mediamanager__page .panel {
    float: left;
  }
  #mediamanager__page .namespaces {
    width: 15%;
    min-width: 120px;
  }
  #mediamanager__page .filelist {
    width: 50%;
    min-width: 400px;
  }
  #mediamanager__page .file {
    width: 35%;
    min-width: 280px;
  }
  #mediamanager__page .panelHeader {
    background-color: #dee7ec;
    margin: 0 10px 10px 0;
    padding: 10px 10px 8px;
    text-align: left;
    min-height: 20px;
    overflow: hidden;
  }
  [dir=rtl] #mediamanager__page .panelContent {
    text-align: right;
  }
  #mediamanager__page .panelContent {
    overflow-y: auto;
    overflow-x: hidden;
    padding: 0;
    margin: 0 10px 10px 0;
    position: relative;
  }
  #mediamanager__page .file .panelHeader,
  #mediamanager__page .file .panelContent {
    margin-right: 0;
  }
  #mediamanager__page .ui-resizable-e {
    width: 6px;
    right: 2px;
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/resizecol.png) center center no-repeat;
  }
  #mediamanager__page .ui-resizable-e:hover {
    background-color: #dee7ec;
  }
  [dir=rtl] #mediamanager__page .namespaces {
    text-align: right;
  }
  #mediamanager__page .namespaces h2 {
    font-size: 1em;
    display: inline-block;
    border-width: 0;
    padding: .3em .8em;
    margin: 0 .3em 0 0;
    border-radius: .5em .5em 0 0;
    font-weight: normal;
    background-color: #dee7ec;
    color: #333;
    line-height: 1.5em;
  }
  * html #mediamanager__page .namespaces h2,
  *+html #mediamanager__page .namespaces h2 {
    display: inline;
  }
  [dir=rtl] #mediamanager__page .namespaces h2 {
    margin-right: 10px;
  }
  #mediamanager__page .namespaces ul {
    margin-left: .2em;
    margin-bottom: 0;
    padding: 0;
    list-style: none;
  }
  [dir=rtl] #mediamanager__page .namespaces ul {
    margin-left: 0;
    margin-right: .2em;
  }
  #mediamanager__page .namespaces ul ul {
    margin-left: 1em;
  }
  [dir=rtl] #mediamanager__page .namespaces ul ul {
    margin-left: 0;
    margin-right: 1em;
  }
  #mediamanager__page .namespaces ul ul li {
    margin: 0;
  }
  #mediamanager__page .namespaces ul .selected {
    background-color: #ff9;
    font-weight: bold;
  }
  #mediamanager__page .panelHeader h3 {
    float: left;
    font-weight: normal;
    font-size: 1em;
    padding: 0;
    margin: 0 0 3px;
  }
  #mediamanager__page .panelHeader form.options {
    float: right;
    margin-top: -3px;
  }
  #mediamanager__page .panelHeader ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  #mediamanager__page .panelHeader ul li {
    color: #333;
    float: left;
    line-height: 1;
    padding-left: 3px;
  }
  #mediamanager__page .panelHeader ul li.listType {
    padding-left: 30px;
    background: url('/dokuwiki/lib/tpl/arctic/../../images/icon-list.png') 3px 1px no-repeat;
  }
  #mediamanager__page .panelHeader ul li.sortBy {
    padding-left: 30px;
    background: url('/dokuwiki/lib/tpl/arctic/../../images/icon-sort.png') 3px 1px no-repeat;
  }
  #mediamanager__page .panelHeader form.options .ui-buttonset label {
    font-size: 90%;
    margin-right: -0.4em;
  }
  #mediamanager__page .panelHeader form.options .ui-buttonset .ui-button-text {
    padding: .4em .7em;
    line-height: 1;
  }
  #mediamanager__page .filelist ul {
    padding: 0;
    margin: 0;
  }
  [dir=rtl] #mediamanager__page .filelist ul.tabs {
    margin-right: 10px;
  }
  #mediamanager__page .filelist .panelContent ul li:hover {
    background-color: #dee7ec;
  }
  #mediamanager__page .filelist li dt a {
    vertical-align: middle;
    display: table-cell;
    overflow: hidden;
  }
  * html #mediamanager__page .filelist .thumbs li dt a,
  *+html #mediamanager__page .filelist .thumbs li dt a {
    display: block;
  }
  * html #mediamanager__page .filelist .rows li dt a,
  *+html #mediamanager__page .filelist .rows li dt a {
    display: inline;
  }
  #mediamanager__page .filelist .thumbs li {
    width: 100px;
    min-height: 130px;
    display: inline-block;
    /* the right margin should visually be 10px, but because of its inline-block nature the whitespace inbetween is about 4px more */
    display: -moz-inline-stack;
    margin: 0 6px 10px 0;
    background-color: #f5f5f5;
    color: #333;
    padding: 5px;
    vertical-align: top;
    text-align: center;
    position: relative;
    line-height: 1.2;
  }
  [dir=rtl] #mediamanager__page .filelist .thumbs li {
    margin-right: 0;
    margin-left: 6px;
  }
  * html #mediamanager__page .filelist .thumbs li,
  *+html #mediamanager__page .filelist .thumbs li {
    display: inline;
    zoom: 1;
  }
  #mediamanager__page .filelist .thumbs li dt a {
    width: 100px;
    height: 90px;
  }
  #mediamanager__page .filelist .thumbs li dt a img {
    max-width: 90px;
    max-height: 90px;
  }
  #mediamanager__page .filelist .thumbs li .name,
  #mediamanager__page .filelist .thumbs li .size,
  #mediamanager__page .filelist .thumbs li .filesize,
  #mediamanager__page .filelist .thumbs li .date {
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 90px;
    white-space: nowrap;
  }
  #mediamanager__page .filelist .thumbs li .name {
    padding: 5px 0;
    font-weight: bold;
  }
  #mediamanager__page .filelist .thumbs li .date {
    font-style: italic;
    white-space: normal;
  }
  #mediamanager__page .filelist .rows li {
    list-style: none;
    display: block;
    position: relative;
    max-height: 50px;
    margin: 0;
    margin-bottom: 3px;
    background-color: #fff;
    color: #333;
    overflow: hidden;
  }
  #mediamanager__page .filelist .rows li:nth-child(2n+1) {
    background-color: #f5f5f5;
  }
  #mediamanager__page .filelist .rows li dt {
    float: left;
    width: 10%;
    height: 40px;
    text-align: center;
  }
  #mediamanager__page .filelist .rows li dt a {
    width: 100px;
    height: 40px;
  }
  #mediamanager__page .filelist .rows li dt a img {
    max-width: 40px;
    max-height: 40px;
  }
  #mediamanager__page .filelist .rows li .name,
  #mediamanager__page .filelist .rows li .size,
  #mediamanager__page .filelist .rows li .filesize,
  #mediamanager__page .filelist .rows li .date {
    overflow: hidden;
    text-overflow: ellipsis;
    float: left;
    margin-left: 1%;
    white-space: nowrap;
  }
  #mediamanager__page .filelist .rows li .name {
    width: 30%;
    font-weight: bold;
  }
  #mediamanager__page .filelist .rows li .size,
  #mediamanager__page .filelist .rows li .filesize {
    width: 15%;
  }
  #mediamanager__page .filelist .rows li .date {
    width: 20%;
    font-style: italic;
    white-space: normal;
  }
  #mediamanager__page div.upload {
    padding-bottom: 0.5em;
  }
  #media__content #mediamanager__uploader {
    border-bottom: 1px solid #ccc;
    padding-bottom: 0.5em;
  }
  #mediamanager__page .file ul.actions {
    text-align: center;
    margin: 0 0 5px;
    list-style: none;
  }
  #mediamanager__page .file ul.actions li {
    display: inline;
  }
  #mediamanager__page .file div.image {
    margin-bottom: 5px;
    text-align: center;
  }
  #mediamanager__page .file div.image img {
    width: 100%;
  }
  #mediamanager__page .file dl dt {
    font-weight: bold;
    display: block;
    background-color: #dee7ec;
  }
  #mediamanager__page .file dl dd {
    display: block;
    background-color: #f5f5f5;
  }
  #mediamanager__page form.meta div.row {
    margin-bottom: 5px;
  }
  #mediamanager__page form.meta label span {
    display: block;
  }
  [dir=rtl] #mediamanager__page form.meta label span {
    text-align: right;
  }
  #mediamanager__page form.meta input {
    width: 50%;
  }
  #mediamanager__page form.meta input.button {
    width: auto;
  }
  #mediamanager__page form.meta textarea.edit {
    height: 6em;
    width: 95%;
    min-width: 95%;
    max-width: 95%;
  }
  #mediamanager__page form.changes ul {
    margin-left: 10px;
    list-style-type: none;
  }
  #mediamanager__page form.changes ul li div.li div {
    font-size: 90%;
    color: #666;
    padding-left: 18px;
  }
  #mediamanager__page form.changes ul li div.li input {
    position: relative;
    top: 1px;
  }
  #mediamanager__diff table {
    table-layout: fixed;
  }
  #mediamanager__diff td,
  #mediamanager__diff th {
    width: 48%;
    margin: 0 5px 10px 0;
    padding: 0;
    vertical-align: top;
    text-align: left;
  }
  [dir=rtl] #mediamanager__diff td,
  [dir=rtl] #mediamanager__diff th {
    text-align: right;
  }
  #mediamanager__diff th {
    font-weight: normal;
  }
  #mediamanager__diff th a {
    font-weight: bold;
  }
  #mediamanager__diff th span {
    font-size: 90%;
  }
  #mediamanager__diff dl dd strong {
    background-color: #ff9;
    color: #333;
    font-weight: normal;
  }
  #mediamanager__page .file form.diffView {
    margin-bottom: 10px;
    display: block;
  }
  #mediamanager__diff div.slider {
    margin: 10px;
    width: 95%;
  }
  #mediamanager__diff .imageDiff {
    position: relative;
  }
  #mediamanager__diff .imageDiff .image2 {
    position: absolute;
    top: 0;
    left: 0;
  }
  #mediamanager__diff .imageDiff.opacity .image2 {
    -moz-opacity: 0.5;
    -khtml-opacity: 0.5;
    opacity: 0.5;
  }
  #mediamanager__diff .imageDiff.portions .image2 {
    border-right: 1px solid red;
    overflow: hidden;
  }
  #mediamanager__diff .imageDiff.portions img {
    float: left;
  }
  #mediamanager__diff .imageDiff img {
    width: 100%;
    max-width: none;
  }
  .dokuwiki ul.tabs {
    padding: 0;
    margin: 0;
    overflow: hidden;
  }
  .dokuwiki ul.tabs li {
    float: left;
    padding: 0;
    margin: 0;
    list-style: none;
  }
  [dir=rtl] .dokuwiki ul.tabs li {
    float: right;
  }
  .dokuwiki ul.tabs li strong,
  .dokuwiki ul.tabs li a {
    float: left;
    padding: .3em .8em;
    margin: 0 .3em 0 0;
    background-color: #f5f5f5;
    color: #333;
    border-radius: .5em .5em 0 0;
  }
  [dir=rtl] .dokuwiki ul.tabs li strong,
  [dir=rtl] .dokuwiki ul.tabs li a {
    float: right;
    margin: 0 0 0 .3em;
  }
  *+html[dir=rtl] .dokuwiki ul.tabs li strong,
  *+html[dir=rtl] .dokuwiki ul.tabs li a {
    float: none;
    display: inline-block;
  }
  .dokuwiki ul.tabs li strong {
    font-weight: normal;
  }
  .dokuwiki ul.tabs li a:hover,
  .dokuwiki ul.tabs li a:active,
  .dokuwiki ul.tabs li a:focus,
  .dokuwiki ul.tabs li strong {
    background-color: #dee7ec;
    color: #333;
    text-decoration: none;
  }
  .qq-uploader {
    position: relative;
    width: 100%;
  }
  .qq-uploader .error {
    color: #f00;
    background-color: #fff;
  }
  .qq-upload-button {
    display: inline-block;
    border: 1px solid #ccc;
    color: #333;
    background: #fff url(/dokuwiki/lib/tpl/arctic/images/buttonshadow.png) repeat-x bottom;
    text-decoration: none;
    font-size: 100%;
    cursor: pointer;
    margin: 1px 1px 5px;
    padding: 0.125em 0.4em;
  }
  * html .qq-upload-button,
  *+html .qq-upload-button {
    display: inline;
  }
  .qq-upload-button-focus {
    outline: 1px dotted;
  }
  .qq-upload-drop-area {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    min-height: 70px;
    z-index: 2;
    background: #f5f5f5;
    color: #333;
    text-align: center;
  }
  .qq-upload-drop-area span {
    display: block;
    position: absolute;
    top: 50%;
    width: 100%;
    margin-top: -8px;
    font-size: 120%;
  }
  .qq-upload-drop-area-active {
    background: #dee7ec;
  }
  div.qq-uploader ul {
    margin: 0;
    list-style: none;
  }
  .qq-uploader li {
    margin-bottom: 5px;
    color: #333;
  }
  .qq-uploader li span,
  .qq-uploader li input,
  .qq-uploader li a {
    margin-right: 5px;
  }
  .qq-upload-file {
    display: block;
    font-weight: bold;
  }
  .qq-upload-spinner {
    display: inline-block;
    background: url("/dokuwiki/lib/tpl/arctic/../../images/throbber.gif");
    width: 15px;
    height: 15px;
    vertical-align: text-bottom;
  }
  .qq-upload-size,
  .qq-upload-cancel {
    font-size: 85%;
  }
  .qq-upload-failed-text {
    display: none;
  }
  .qq-upload-fail .qq-upload-failed-text {
    display: inline;
  }
  .qq-action-container * {
    vertical-align: middle;
  }
  .qq-overwrite-check input {
    margin-left: 10px;
  }
  div.dokuwiki .header {
    height: 5em;
    border: 1px solid #ccc;
    background-color: #436976;
    margin-bottom: 0.2em;
  }
  div.dokuwiki .pagename {
    margin: 0.2em;
    font-size: 130%;
    color: #f5f5f5;
  }
  div.dokuwiki .logo {
    margin: 0.2em;
    font-size: 130%;
  }
  div.dokuwiki .pagename a {
    color: #f8f8f8 !important;
  }
  div.dokuwiki .logo a {
    color: #f8f8f8 !important;
  }
  div.dokuwiki .bar {
    padding: 2px;
    float: left;
    width: 99.2%;
  }
  div.dokuwiki #bar__top,
  div.dokuwiki #bar__bottom {
    background: none;
  }
  div.dokuwiki div.meta {
    padding: 0 0.5em 0 0.5em;
  }
  div.dokuwiki div.footerinc div.license {
    display: inline;
    padding: 0;
    font-size: 100%;
  }
  div.dokuwiki div.footerinc div.license img {
    float: none;
    margin: 0;
  }
  body {
    font: 0.8125em Verdana, "Lucida Grande", Lucida, Helvetica, Arial, sans-serif;
    color: #333;
    margin: 1.5em;
    line-height: 150%;
    background: #f8f8f8;
  }
  div#wrapper {
    margin: auto;
    width: 84%;
    border: 1px solid #ccc;
    background: #fff;
    padding: 0.5em;
  }
  div#wrapper.media {
    width: 100%;
  }
  div.dokuwiki div.left_sidebar {
    float: left;
    width: 22%;
    padding: 0.2em 0.5em 0 0;
    border-right: 1px solid #ccc;
  }
  div.dokuwiki div.right_sidebar {
    float: right;
    width: 22%;
    padding: 0.2em 0em 0 0.5em;
    border-left: 1px solid #ccc;
  }
  div.dokuwiki div.page {
    text-align: justify;
    padding-top: 0;
  }
  div.dokuwiki main.left_page,
  div.dokuwiki main.right_page {
    text-align: justify;
    float: left;
    width: 72% !important;
    width: 69%;
    padding: 2%;
  }
  div.dokuwiki main.center_page {
    text-align: justify;
    float: left;
    width: 49% !important;
    width: 47%;
    padding: 2% !important;
    padding: 1%;
  }
  div.footerinc {
    border: 1px solid #ccc;
    background-color: #436976;
    margin-top: 0.5em;
  }
  div.dokuwiki .footerinc a img {
    padding-top: 2em;
    padding-bottom: 2em;
    border: 0;
  }
  div.dokuwiki div.left_sidebar div.secedit,
  div.dokuwiki div.right_sidebar div.secedit {
    text-align: right;
  }
  div.dokuwiki div.left_sidebar div.breadcrumbs,
  div.dokuwiki div.right_sidebar div.breadcrumbs {
    margin-left: 0;
  }
  div.dokuwiki div.left_sidebar div.secedit input.button,
  div.dokuwiki div.right_sidebar div.secedit input.button {
    float: none;
    margin: 0.1em;
  }
  div.dokuwiki div.left_sidebar h1,
  div.dokuwiki div.left_sidebar h2,
  div.dokuwiki div.left_sidebar h3,
  div.dokuwiki div.left_sidebar h4,
  div.dokuwiki div.left_sidebar h5,
  div.dokuwiki div.left_sidebar h6,
  div.dokuwiki div.right_sidebar h1,
  div.dokuwiki div.right_sidebar h2,
  div.dokuwiki div.right_sidebar h3,
  div.dokuwiki div.right_sidebar h4,
  div.dokuwiki div.right_sidebar h5,
  div.dokuwiki div.right_sidebar h6 {
    font-size: 100%;
    font-family: Verdana, "Lucida Grande", Lucida, Helvetica, Arial, sans-serif;
    font-weight: bold;
    padding: 0.1em;
    border: none;
    margin: 0 0 0.2em 0;
  }
  div.dokuwiki div.left_sidebar h1,
  div.dokuwiki div.right_sidebar h1 {
    background: #dee7ec;
    padding-left: 0.2em;
  }
  div.dokuwiki div.left_sidebar div.level2,
  div.dokuwiki div.right_sidebar div.level2,
  div.dokuwiki div.left_sidebar div.level3,
  div.dokuwiki div.right_sidebar div.level3,
  div.dokuwiki div.left_sidebar div.level4,
  div.dokuwiki div.right_sidebar div.level4,
  div.dokuwiki div.left_sidebar div.level5,
  div.dokuwiki div.right_sidebar div.level5 {
    margin-left: 3px;
  }
  div.dokuwiki div.left_sidebar ul,
  div.dokuwiki div.right_sidebar ul {
    margin-top: 0;
    margin-left: 1.5em;
  }
  div.dokuwiki aside.sidebar_box {
    border: 1px solid #ccc;
    margin-bottom: 0.2em;
    padding: 0.3em;
    overflow: hidden;
  }
  div.dokuwiki a:hover {
    color: #436976;
  }
  div.dokuwiki h1 a {
    display: block;
  }
  div.dokuwiki a.action {
    color: #436976;
  }
  div.dokuwiki .bar a.action {
    margin: 0 0.3em 0 0.3em;
    height: 24px;
    padding-top: 3px;
    float: left;
  }
  div.dokuwiki a.urlextern {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/urlextern.png) 0px 1px no-repeat;
    padding-left: 18px;
  }
  div.dokuwiki a.urlextern:visited,
  div.dokuwiki a.windows:visited,
  div.dokuwiki a.interwiki:visited {
    color: #436976;
  }
  div.dokuwiki h1 a,
  div.dokuwiki h2 a,
  div.dokuwiki h3 a,
  div.dokuwiki h4 a,
  div.dokuwiki h5 a,
  div.dokuwiki a.nolink {
    color: #333 !important;
  }
  div.dokuwiki div.breadcrumbs {
    background: none;
  }
  div.dokuwiki h1,
  div.dokuwiki h2,
  div.dokuwiki h3,
  div.dokuwiki h4,
  div.dokuwiki h5 {
    color: #333;
    border-color: #ccc;
  }
  div.dokuwiki h1 {
    font-size: 180%;
    font-weight: normal;
  }
  div.dokuwiki h2 {
    font-size: 170%;
  }
  div.dokuwiki h3 {
    font-size: 160%;
    font-weight: normal;
  }
  div.dokuwiki h4 {
    font-size: 140%;
    font-weight: normal;
  }
  div.dokuwiki h5 {
    font-size: 120%;
    font-weight: bold;
  }
  div.dokuwiki pre.code,
  div.dokuwiki pre.file {
    width: auto !important;
    width: 98%;
    font-size: 100%;
  }
  * html div.insitu-footnote {
    margin: 12em 0 0 38em;
  }
  div.dokuwiki fieldset {
    border-color: #c3c3c3;
  }
  div.dokuwiki textarea.edit {
    border-color: #c3c3c3;
  }
  div.dokuwiki input.edit,
  div.dokuwiki select.edit {
    border-color: #c3c3c3;
  }
  div.dokuwiki input.missing {
    border-color: #c3c3c3;
  }
  div.dokuwiki div.left_sidebar form#dw__search,
  div.dokuwiki div.right_sidebar form#dw__search {
    margin-bottom: 0.2em;
    display: block;
    font-size: 100%;
  }
  div.dokuwiki div.left_sidebar form#dw__search input.edit,
  div.dokuwiki div.right_sidebar form#dw__search input.edit {
    margin-left: 0;
    font-size: 100%;
    width: 60%;
  }
  div.dokuwiki input.button,
  div.dokuwiki button.button {
    border-color: #c3c3c3;
    font-size: 100%;
  }
  div.dokuwiki div.secedit input.button {
    border-color: #c3c3c3;
    font-size: 100%;
  }
  div.dokuwiki .bar input.button {
    height: 24px;
  }
  div.dokuwiki div.toc {
    margin-top: 1.3em;
    width: 20em;
  }
  div.dokuwiki div.toc_sidebar div.toc {
    margin: 0;
    float: none;
    width: 100%;
  }
  div.dokuwiki div.toc ul {
    margin-left: 0.2em;
  }
  div.dokuwiki div.tocheader {
    line-height: 110%;
  }
  div.dokuwiki div.toc_sidebar div.tocheader {
    font-size: 120%;
    line-height: 140%;
    border: none;
  }
  div.dokuwiki ul.toc {
    padding-left: 0.5em;
  }
  div.dokuwiki div.toc_sidebar div#toc__inside {
    border: none;
    padding: 0;
  }
  div.dokuwiki div.left_sidebar div.ajax_qsearch,
  div.dokuwiki div.right_sidebar div.ajax_qsearch {
    position: relative;
    left: 0;
    top: 2px;
    display: none;
    background: #f5f5f5;
    font-size: 85%;
    width: 95.5%;
    margin: 0.2em 0 0.5em 0;
  }
  div.dokuwiki div#bar__top div.ajax_qsearch {
    position: absolute;
    right: 100px;
    width: 200px;
    font-size: 85%;
    display: none;
    border: 1px solid #ccc;
    background: #f5f5f5;
    text-align: left;
    padding: 0.2em;
    margin-top: 5px;
    opacity: 0.9;
  }
  div.dokuwiki  div.ajax_qsearch strong {
    font-size: 115%;
    background: #dee7ec;
    padding: 0.2em;
    display: block;
  }
  div.dokuwiki div.toolbox_sidebar ul {
    list-style: none;
    margin: 0;
    clear: both;
  }
  div.dokuwiki div.toolbox_sidebar a.login,
  div.dokuwiki div.toolbox_sidebar a.logout,
  div.dokuwiki div.toolbox_sidebar a.index,
  div.dokuwiki div.toolbox_sidebar a.recent,
  div.dokuwiki div.toolbox_sidebar a.create,
  div.dokuwiki div.toolbox_sidebar a.edit,
  div.dokuwiki div.toolbox_sidebar a.source,
  div.dokuwiki div.toolbox_sidebar a.show,
  div.dokuwiki div.toolbox_sidebar a.admin,
  div.dokuwiki div.toolbox_sidebar a.revs,
  div.dokuwiki div.toolbox_sidebar a.subscribe,
  div.dokuwiki div.toolbox_sidebar a.subscribens,
  div.dokuwiki div.toolbox_sidebar a.unsubscribe,
  div.dokuwiki div.toolbox_sidebar a.unsubscribens,
  div.dokuwiki div.toolbox_sidebar a.backlink,
  div.dokuwiki div.toolbox_sidebar a.media,
  div.dokuwiki div.toolbox_sidebar a.profile,
  div.dokuwiki div.toolbox_sidebar a.revert,
  div.dokuwiki div.toolbox_sidebar a.top,
  div.dokuwiki div.toolbox_sidebar a.npd {
    padding: 1px 0px 1px 18px;
  }
  div.dokuwiki div.toolbox_sidebar a.login {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-login.png) 0px 1px no-repeat;
  }
  div.dokuwiki div.toolbox_sidebar a.logout,
  div.dokuwiki div.bar a.logout {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-logout.png) 0px 1px no-repeat;
  }
  div.dokuwiki div.toolbox_sidebar a.index {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-index.png) 1px 1px no-repeat;
  }
  div.dokuwiki div.toolbox_sidebar a.recent {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-recent.png) 0px 1px no-repeat;
  }
  div.dokuwiki div.toolbox_sidebar a.create,
  div.dokuwiki div.toolbox_sidebar a.edit,
  div.dokuwiki div.toolbox_sidebar a.npd {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-edit.png) 0px 1px no-repeat;
  }
  div.dokuwiki div.toolbox_sidebar a.source,
  div.dokuwiki div.toolbox_sidebar a.show {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-source.png) 0px 1px no-repeat;
  }
  div.dokuwiki div.toolbox_sidebar a.admin {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-admin.png) 0px 1px no-repeat;
  }
  div.dokuwiki div.toolbox_sidebar a.revs {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-revisions.png) 0px 1px no-repeat;
  }
  div.dokuwiki div.toolbox_sidebar a.subscribe,
  div.dokuwiki div.toolbox_sidebar a.subscribens,
  div.dokuwiki div.toolbox_sidebar a.unsubscribe,
  div.dokuwiki div.toolbox_sidebar a.unsubscribens {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-subscribe.png) 0px 1px no-repeat;
  }
  div.dokuwiki div.toolbox_sidebar a.backlink {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-backlink.png) 0px 1px no-repeat;
  }
  div.dokuwiki div.toolbox_sidebar a.media {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/mediamanager.png) 0px 1px no-repeat;
  }
  div.dokuwiki div.toolbox_sidebar a.profile {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-profile.png) 0px 1px no-repeat;
  }
  div.dokuwiki div.toolbox_sidebar a.revert {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-revert.png) 0px 1px no-repeat;
  }
  div.dokuwiki div.toolbox_sidebar a.top {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-top.png) 0px 5px no-repeat;
  }
  div.dokuwiki div.bar a.media,
  div.dokuwiki div.bar a.login,
  div.dokuwiki div.bar a.logout,
  div.dokuwiki div.bar a.index,
  div.dokuwiki div.bar a.recent,
  div.dokuwiki div.bar a.create,
  div.dokuwiki div.bar a.edit,
  div.dokuwiki div.bar a.source,
  div.dokuwiki div.bar a.show,
  div.dokuwiki div.bar a.admin,
  div.dokuwiki div.bar a.revs,
  div.dokuwiki div.bar a.subscribe,
  div.dokuwiki div.bar a.subscribens,
  div.dokuwiki div.bar a.unsubscribe,
  div.dokuwiki div.bar a.unsubscribens,
  div.dokuwiki div.bar a.backlink,
  div.dokuwiki div.bar a.profile,
  div.dokuwiki div.bar a.top,
  div.dokuwiki div.bar a.revert,
  div.dokuwiki div.bar a.npd {
    padding-left: 20px;
  }
  div.dokuwiki div.bar a.login {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-login.png) 0px 5px no-repeat;
  }
  div.dokuwiki div.bar a.logout,
  div.dokuwiki div.bar a.logout {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-logout.png) 0px 5px no-repeat;
  }
  div.dokuwiki div.bar a.index {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-index.png) 0px 5px no-repeat;
  }
  div.dokuwiki div.bar a.recent {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-recent.png) 0px 5px no-repeat;
  }
  div.dokuwiki div.bar a.create,
  div.dokuwiki div.bar a.edit,
  div.dokuwiki div.bar a.npd {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-edit.png) 0px 5px no-repeat;
  }
  div.dokuwiki div.bar a.source,
  div.dokuwiki div.bar a.show {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-source.png) 0px 5px no-repeat;
  }
  div.dokuwiki div.bar a.admin {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-admin.png) 0px 5px no-repeat;
  }
  div.dokuwiki div.bar a.revs {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-revisions.png) 0px 5px no-repeat;
  }
  div.dokuwiki div.bar a.subscribe,
  div.dokuwiki div.bar a.subscribens,
  div.dokuwiki div.bar a.unsubscribe,
  div.dokuwiki div.bar a.unsubscribens {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-subscribe.png) 0px 5px no-repeat;
  }
  div.dokuwiki div.bar a.backlink {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-backlink.png) 0px 5px no-repeat;
  }
  div.dokuwiki div.bar a.profile {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-profile.png) 0px 5px no-repeat;
  }
  div.dokuwiki div.bar a.top {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-top.png) 0px 5px no-repeat;
  }
  div.dokuwiki div.bar a.revert {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/tool-revert.png) 0px 5px no-repeat;
  }
  div.dokuwiki div.bar a.media {
    background: transparent url(/dokuwiki/lib/tpl/arctic/images/mediamanager.png) 0px 5px no-repeat;
  }
  #media__left,
  #media__right {
    background: #fff;
  }
}
div.clearer {
  clear: both;
  font-size: 0;
  line-height: 0;
  height: 0;
  overflow: hidden;
}
.group {
  display: inline-block;
}
.group {
  display: block;
}
.group:before,
.group:after {
  content: "";
  display: table;
}
.group:after {
  clear: both;
}
div.no {
  display: inline;
  margin: 0;
  padding: 0;
}
.hidden {
  display: none;
}
.medialeft {
  float: left;
}
.mediaright {
  float: right;
}
.mediacenter {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.leftalign {
  text-align: left;
}
.centeralign {
  text-align: center;
}
.rightalign {
  text-align: right;
}
em.u {
  font-style: normal;
  text-decoration: underline;
}
em em.u {
  font-style: italic;
}
.dokuwiki .plugin_wrap {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.dokuwiki .plugin_wrap table {
  width: 100%;
}
.dokuwiki .plugin_wrap em strong {
  font-size: 130%;
  font-weight: bold;
  font-style: normal;
  display: block;
}
.dokuwiki .plugin_wrap em strong em.u {
  font-size: 115%;
  border-bottom: 1px solid #ccc;
  font-style: normal;
  text-decoration: none;
  display: block;
}
.dokuwiki .wrap_danger em strong em.u,
.dokuwiki .wrap_warning em strong em.u,
.dokuwiki .wrap_caution em strong em.u,
.dokuwiki .wrap_notice em strong em.u,
.dokuwiki .wrap_safety em strong em.u {
  text-transform: uppercase;
  border-bottom-width: 0;
}
.dokuwiki .wrap_box em strong em.u,
.dokuwiki .wrap_info em strong em.u,
.dokuwiki .wrap_important em strong em.u,
.dokuwiki .wrap_alert em strong em.u,
.dokuwiki .wrap_tip em strong em.u,
.dokuwiki .wrap_help em strong em.u,
.dokuwiki .wrap_todo em strong em.u,
.dokuwiki .wrap_download em strong em.u {
  border-bottom-color: #999;
}
.dokuwiki .plugin_wrap h1,
.dokuwiki .plugin_wrap h2,
.dokuwiki .plugin_wrap h3,
.dokuwiki .plugin_wrap h4,
.dokuwiki .plugin_wrap h5 {
  margin-left: 0;
  margin-right: 0;
}
.dokuwiki .wrap_left,
.dokuwiki .wrap_column {
  float: left;
  margin-right: 1.5em;
}
[dir=rtl] .dokuwiki .wrap_column {
  float: right;
  margin-left: 1.5em;
  margin-right: 0;
}
.dokuwiki .wrap_right {
  float: right;
  margin-left: 1.5em;
}
.dokuwiki .wrap_center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.dokuwiki .wrap_col2,
.dokuwiki .wrap_col3,
.dokuwiki .wrap_col4,
.dokuwiki .wrap_col5 {
  -moz-column-gap: 1.5em;
  -webkit-column-gap: 1.5em;
  column-gap: 1.5em;
  -moz-column-rule: 1px dotted #666;
  -webkit-column-rule: 1px dotted #666;
  column-rule: 1px dotted #666;
}
.dokuwiki .wrap_col2 {
  -moz-column-count: 2;
  -webkit-column-count: 2;
  column-count: 2;
}
.dokuwiki .wrap_col3 {
  -moz-column-count: 3;
  -webkit-column-count: 3;
  column-count: 3;
}
.dokuwiki .wrap_col4 {
  -moz-column-count: 4;
  -webkit-column-count: 4;
  column-count: 4;
}
.dokuwiki .wrap_col5 {
  -moz-column-count: 5;
  -webkit-column-count: 5;
  column-count: 5;
}
.dokuwiki .wrap_half {
  width: 48%;
  margin-right: 4%;
}
.dokuwiki .wrap_third {
  width: 30%;
  margin-right: 5%;
}
.dokuwiki .wrap_quarter {
  width: 22%;
  margin-right: 4%;
}
[dir=rtl] .dokuwiki .wrap_half,
[dir=rtl] .dokuwiki .wrap_third,
[dir=rtl] .dokuwiki .wrap_quarter {
  margin-right: 0;
  margin-left: 4%;
}
[dir=rtl] .dokuwiki .wrap_third {
  margin-left: 5%;
}
.dokuwiki .wrap_half:nth-of-type(2n),
.dokuwiki .wrap_third:nth-of-type(3n),
.dokuwiki .wrap_quarter:nth-of-type(4n) {
  margin-right: 0;
}
[dir=rtl] .dokuwiki .wrap_half:nth-of-type(2n),
[dir=rtl] .dokuwiki .wrap_third:nth-of-type(3n),
[dir=rtl] .dokuwiki .wrap_quarter:nth-of-type(4n) {
  margin-left: 0;
}
.dokuwiki .wrap_half:nth-of-type(2n+1),
.dokuwiki .wrap_third:nth-of-type(3n+1),
.dokuwiki .wrap_quarter:nth-of-type(4n+1) {
  clear: left;
}
[dir=rtl] .dokuwiki .wrap_half:nth-of-type(2n+1),
[dir=rtl] .dokuwiki .wrap_third:nth-of-type(3n+1),
[dir=rtl] .dokuwiki .wrap_quarter:nth-of-type(4n+1) {
  clear: right;
}
@media only screen and (max-width: 600px) {
  .dokuwiki .wrap_half,
  .dokuwiki .wrap_third,
  .dokuwiki .wrap_quarter {
    width: auto;
    margin-right: 0;
    margin-left: 0;
    float: none;
  }
}
.dokuwiki .wrap_leftalign {
  text-align: left;
}
.dokuwiki .wrap_centeralign {
  text-align: center;
}
.dokuwiki .wrap_rightalign {
  text-align: right;
}
.dokuwiki .wrap_justify {
  text-align: justify;
}
.dokuwiki div.wrap_round {
  border-radius: 1.4em;
}
.dokuwiki span.wrap_round {
  border-radius: .14em;
}
.dokuwiki .wrap_lo {
  color: #666;
  font-size: 85%;
}
.dokuwiki .wrap_em {
  color: #c00;
  font-weight: bold;
}
.dokuwiki .wrap_indent {
  padding-left: 1.5em;
}
[dir=rtl] .dokuwiki .wrap_indent {
  padding-right: 1.5em;
  padding-left: 0;
}
.dokuwiki .wrap_outdent {
  margin-left: -1.5em;
}
[dir=rtl] .dokuwiki .wrap_outdent {
  margin-right: -1.5em;
  margin-left: 0;
}
.dokuwiki div.wrap_prewrap pre {
  white-space: pre-wrap;
  /* for IE < 8 */
  word-wrap: break-word;
}
.dokuwiki div.wrap_spoiler {
  margin-bottom: 1.5em;
}
.dokuwiki .wrap_clear {
  clear: both;
  line-height: 0;
  height: 0;
  font-size: 1px;
  visibility: hidden;
  overflow: hidden;
}
.dokuwiki .wrap_hide {
  display: none;
}
@media only screen and (max-width: 600px) {
  #extension__list .legend > div {
    padding-left: 0;
  }
  #extension__list .legend div.screenshot {
    margin: 0 .5em .5em 0;
  }
  #extension__list .legend h2 {
    width: auto;
    float: none;
  }
  #extension__list .legend div.linkbar {
    clear: left;
  }
  [dir=rtl] #extension__list .legend > div {
    padding-right: 0;
  }
  [dir=rtl] #extension__list .legend div.screenshot {
    margin: 0 0 .5em .5em;
  }
  [dir=rtl] #extension__list .legend div.linkbar {
    clear: right;
  }
}
@media print {
  /* messages with msg() */
  /* section edit button */
  /* accessibly hidden text */
  /* modal windows */
  /* XXXXXXXXX /lib/plugins/pagelist/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/pagelist/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/acl/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/acl/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/info/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/info/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/upgrade/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/upgrade/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authad/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authad/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/xbr/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/xbr/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/backup/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/backup/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/usermanager/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/usermanager/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/styling/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/styling/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/conflictmerger/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/conflictmerger/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/plantuml/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/plantuml/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/revert/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/revert/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authldap/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authldap/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/include/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/include/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/searchformgoto/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/searchformgoto/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/popularity/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/popularity/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/safefnrecode/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/safefnrecode/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/wrap/print.css XXXXXXXXX */
  /********************************************************************
Print Styles for the Wrap Plugin (additional to all.css)
********************************************************************/
  /* boxes and notes with icons
********************************************************************/
  /* mark
********************************************************************/
  /* miscellaneous
********************************************************************/
  /*____________ spoiler ____________*/
  /*____________ pagebreak ____________*/
  /*____________ avoid page break ____________*/
  /* not yet supported by most browsers */
  /*____________ no print ____________*/
  /* XXXXXXXXX /lib/plugins/wrap/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authpgsql/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authpgsql/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authplain/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authplain/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/config/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/config/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/extension/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/extension/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/tag/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/tag/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authmysql/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/authmysql/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/swiftmail/print.css XXXXXXXXX */
  /* XXXXXXXXX /lib/plugins/swiftmail/print.less XXXXXXXXX */
  /* XXXXXXXXX /lib/tpl/arctic/print.css XXXXXXXXX */
  /* --------------------- Text formating -------------------------------- */
  /* external link */
  /* interwiki link */
  /* email link */
  /* existing wikilink */
  /* the document */
  /* general headline setup */
  /* special headlines */
  /* embedded images */
  /* the styles for media images are already in
   lib/styles/all.css, these are additional styles */
  /* unordered lists */
  /* ordered lists */
  /* the list items overriding the ol definition */
  /* code blocks by indention */
  /* code blocks by code tag */
  /* inline code words */
  /* code blocks by file tag */
  /* footnotes */
  /* ---------- inline tables ------------------- */
  /* XXXXXXXXX /lib/tpl/arctic/arctic_print.css XXXXXXXXX */
  /**
 * Print - additional CSS for the Artic Template
 * @author Michael Klier <chi@chimeric.de>
 */
  /* XXXXXXXXX /conf/userprint.css XXXXXXXXX */
  /* XXXXXXXXX /conf/userprint.less XXXXXXXXX */
  div.error,
  div.info,
  div.success,
  div.notify,
  .secedit,
  .a11y,
  .JSpopup,
  #link__wiz {
    display: none;
  }
  .dokuwiki div.wrap_box,
  .dokuwiki div.wrap_danger,
  .dokuwiki div.wrap_warning,
  .dokuwiki div.wrap_caution,
  .dokuwiki div.wrap_notice,
  .dokuwiki div.wrap_safety,
  .dokuwiki div.wrap_info,
  .dokuwiki div.wrap_important,
  .dokuwiki div.wrap_alert,
  .dokuwiki div.wrap_tip,
  .dokuwiki div.wrap_help,
  .dokuwiki div.wrap_todo,
  .dokuwiki div.wrap_download {
    border: 2px solid #999;
    padding: 1em 1em .5em;
    margin-bottom: 1.5em;
  }
  .dokuwiki span.wrap_box,
  .dokuwiki span.wrap_danger,
  .dokuwiki span.wrap_warning,
  .dokuwiki span.wrap_caution,
  .dokuwiki span.wrap_notice,
  .dokuwiki span.wrap_safety,
  .dokuwiki span.wrap_info,
  .dokuwiki span.wrap_important,
  .dokuwiki span.wrap_alert,
  .dokuwiki span.wrap_tip,
  .dokuwiki span.wrap_help,
  .dokuwiki span.wrap_todo,
  .dokuwiki span.wrap_download {
    border: 1px solid #999;
    padding: 0 .3em;
  }
  .dokuwiki .wrap_hi {
    border: 1px solid #999;
  }
  .dokuwiki .wrap_spoiler {
    visibility: hidden;
  }
  .dokuwiki .wrap_pagebreak {
    page-break-after: always;
  }
  .dokuwiki .wrap_nopagebreak {
    page-break-inside: avoid;
  }
  .dokuwiki .wrap_noprint {
    display: none;
  }
  body {
    font: 10pt "Lucida Grande", Verdana, Lucida, Helvetica, Arial, sans-serif;
    background-color: White;
    color: Black;
  }
  table {
    font-size: 100%;
    padding: 0;
    margin: 0;
  }
  tr,
  td,
  th {
    padding: 0;
    margin: 0;
  }
  img {
    border: 0;
  }
  a {
    color: #000000;
    text-decoration: none;
    background: none !important;
  }
  a.interwiki {
    padding-left: 0px !important;
  }
  div.meta {
    clear: both;
    margin-top: 1em;
    font-size: 70%;
    text-align: right;
  }
  div.breadcrumbs {
    display: none;
  }
  a.urlextern:after {
    content: " [" attr(href) "]";
    font-size: 90%;
  }
  a.interwiki:after {
    content: " [" attr(href) "]";
    font-size: 90%;
  }
  a.mail:after {
    content: " [" attr(href) "]";
    font-size: 90%;
  }
  a.wikilink1 {
    text-decoration: underline;
  }
  div.page {
    text-align: justify;
  }
  h1,
  h2,
  h3,
  h4,
  h5 {
    color: Black;
    background-color: transparent;
    font-family: "Lucida Grande", Verdana, Lucida, Helvetica, Arial, sans-serif;
    font-size: 100%;
    font-weight: normal;
    margin-left: 0;
    margin-right: 0;
    margin-top: 0;
    margin-bottom: 1em;
    padding-left: 0;
    padding-right: 0;
    padding-top: 0.5em;
    padding-bottom: 0;
    border-bottom: 1px solid #000000;
    clear: left;
  }
  h1 {
    font-size: 160%;
    font-weight: bold;
  }
  h2 {
    font-size: 150%;
  }
  h3 {
    font-size: 140%;
    border-bottom: none;
  }
  h4 {
    font-size: 120%;
    border-bottom: none;
  }
  h5 {
    font-size: 100%;
    border-bottom: none;
  }
  img.media {
    margin: 3px;
  }
  img.medialeft {
    margin: 0 1.5em 0 0;
  }
  img.mediaright {
    margin: 0 0 0 1.5em;
  }
  ul {
    line-height: 1.5em;
    list-style-type: square;
    margin: 0 0 1em 3.5em;
    padding: 0;
  }
  ol {
    line-height: 1.5em;
    margin: 0 0 1em 3.5em;
    padding: 0;
    font-weight: normal;
  }
  div.dokuwiki li ul {
    margin-bottom: 0;
  }
  div.dokuwiki li ol {
    margin-bottom: 0;
  }
  div.dokuwiki ol {
    list-style-type: decimal;
  }
  div.dokuwiki ol ol {
    list-style-type: upper-roman;
  }
  div.dokuwiki ol ol ol {
    list-style-type: lower-alpha;
  }
  div.dokuwiki ol ol ol ol {
    list-style-type: lower-greek;
  }
  span.li {
    font-weight: normal;
  }
  pre {
    font-family: monospace;
  }
  pre.pre {
    font-size: 8pt;
    padding: 0.5em;
    border: 1px dashed #000000;
    color: Black;
    overflow: visible;
  }
  pre.code {
    font-size: 8pt;
    padding: 0.5em;
    border: 1px dashed #000000;
    color: Black;
    overflow: visible;
  }
  code {
    font-size: 120%;
  }
  pre.file {
    font-size: 8pt;
    padding: 0.5em;
    border: 1px dotted #000000;
    color: Black;
    overflow: visible;
  }
  div.footnotes {
    clear: both;
    border-top: 1px solid #000000;
    padding-left: 1em;
    margin-top: 1em;
  }
  div.fn {
    font-size: 90%;
  }
  a.fn_top {
    vertical-align: super;
    font-size: 80%;
  }
  a.fn_bot {
    vertical-align: super;
    font-size: 80%;
    font-weight: bold;
  }
  abbr {
    border: 0;
  }
  table.inline {
    font-size: 80%;
    background-color: #ffffff;
    border-spacing: 0px;
    border-collapse: collapse;
  }
  table.inline th {
    padding: 3px;
    border: 1px solid #000000;
    border-bottom: 2px solid #000000;
  }
  table.inline td {
    padding: 3px;
    border: 1px solid #000000;
  }
  #dw__toc,
  .footerinc,
  .header,
  .bar,
  .user {
    display: none;
  }
  div.dokuwiki div.left_sidebar,
  div.dokuwiki div.right_sidebar {
    display: none;
  }
}
