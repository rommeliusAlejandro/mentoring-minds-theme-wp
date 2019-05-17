(function() {
   tinymce.create('tinymce.plugins.tut_button', {
      init : function(ed, url) {
         ed.addButton('tut_button', {
            title : 'Tutorials Buttons',
            image : url+'/back.png',
            onclick : function() {
               var link = prompt("Youtube Link Video", " ");
               var label = prompt("Button Label", " ");

               if(link !== null && link !== " " && label!== null && label !== " ")
               {
                  ed.execCommand('mceInsertContent', false, '[tut_button video="'+link+'" label="'+label+'"]<>');
               }             
            }
         });
      },
      createControl : function(n, cm) {
         return null;
      },
      getInfo : function() {
         return {
            longname : "Tutorials Button",
            author : 'Act Bold Media Group',
            authorurl : 'http://www.kouratoras.gr',
            infourl : 'http://www.smashingmagazine.com',
            version : "1.0"
         };
      }
   });
   tinymce.PluginManager.add('tut_button', tinymce.plugins.tut_button);
})();