.menu-section-bigfarm i:before {
    font-family: FontAwesome;
    content: "\f11b";
}
.menu-section-item-bigfarm:before {
    content: url(<?php echo ossn_site_url('components/BigFarm/images/bigfarm.png');?>) !important;
}
.icontainer {
  position: relative;
  overflow: hidden;
  width: 100%;
  padding-top: 62.5%; /* 8:5 Aspect Ratio */
}
.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}