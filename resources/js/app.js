import './bootstrap';
import './agenda';
import Alpine from 'alpinejs';
window.Alpine = Alpine
Alpine.start()


(function( document ) {
  var selectors = [
      'iframe[src*="player.vimeo.com"]',
      'iframe[src*="youtube.com"]'
      ],
      $allVids, $vid,
      $wrap, id,
      i,l,
      width,height,ratio;

  if (!('querySelectorAll' in document )) {
    // does not cut mustard
    return;
  }

  $allVids = document.querySelectorAll( selectors.join(',') );

  for ( i=0, l=$allVids.length; i<l; i++ ) {
    $vid = $allVids[i];
 
    // calculate ratio
    width = $vid.width;
    height = $vid.height;
    ratio = height / width;
 
    // create wrapper element
    $wrap = document.createElement("div");
    $wrap.id = 'fluid-video-wrapper-' + i;
    $wrap.className = "fluid-width-video-wrapper";
    $wrap.style.paddingTop = (ratio * 100) + "%";

    // replace video with wrapper
    $vid.parentNode.replaceChild($wrap, $vid);
    // put video within wrapper
    $vid.removeAttribute("width");
    $vid.removeAttribute("height");
    $wrap.appendChild($vid);
  }
}( window.document ));