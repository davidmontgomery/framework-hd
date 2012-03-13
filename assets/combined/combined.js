/****** FILE: themes/framework-hd/js/general.js *****/

(function($){$(document).ready(function(){var $searchInput=$('.search-form input.text');$searchInput.bind('focus',function(){$searchInput.animate({'width':'200px'},250);});$searchInput.bind('blur',function(){$searchInput.animate({'width':'110px'},250);});$("a[href*='http://']:not([href*='"+location.hostname+"']),[href*='https://']:not([href*='"+location.hostname+"'])").addClass('external_link').attr('target','_blank').attr('title','Opens new window');});})(jQuery);
;
/****** FILE: themes/framework-hd/js/placeholder.js *****/

(function($){$(document).ready(function(){var testPlaceholder=function(){var i=document.createElement('input');return'placeholder'in i;}
if(!testPlaceholder()){$("input[placeholder]").each(function(){var input=$(this),placeholder=input.attr("placeholder");input.removeAttr("placeholder");if(!input.val()){input.val(placeholder);}
input.bind("focus blur",function(e){if(e.type==="focus"&&input.val()===placeholder){input.val("");}else{if(!input.val()){input.val(placeholder);}}});});}})})(jQuery);
;
