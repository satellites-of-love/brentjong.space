/* @license GNU-GPL-2.0-or-later https://www.drupal.org/licensing/faq */
document.documentElement.classList.add('ontouchstart' in window||(window.DocumentTouch&&document instanceof window.DocumentTouch)?'touchevents':'no-touchevents');;
(function(){const settingsElement=document.querySelector('head > script[type="application/json"][data-drupal-selector="drupal-settings-json"], body > script[type="application/json"][data-drupal-selector="drupal-settings-json"]');window.drupalSettings={};if(settingsElement!==null)window.drupalSettings=JSON.parse(settingsElement.textContent);})();;
