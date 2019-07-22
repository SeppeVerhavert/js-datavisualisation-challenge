var _paq = _paq || [];

(function(win, doc) { // PIWIK 1.7

  $wt.piwik = {

    onRemove: function() {
      _paq = [];
      return [];
    },

    run: function(j) {
      var cook = false,
      ref = location.href;
      isFound = false,
      canBeProcess = false;

      try {
        var conf = JSON.parse($wt._analytics);
      } catch(e) {
        console.log(e);
        return false;
      }

      // VALIDATION - MANDATORY NODES
      if (!j["siteID"]) {
        console.log("WTERROR: Piwik, missing 'siteID' parameter");
      }
      else if (!j["sitePath"]) {
        console.log("WTERROR: Piwik, missing 'sitePath' parameter");
      }
      else {

        // SITE ID
        _paq.push(['setSiteId', j["siteID"]]);

        // COOKIE or not
        if (j["sitePath"]) {

          if (Array === j["sitePath"].constructor) {
            cook = j["sitePath"];
          }

          else if (typeof j["sitePath"] === "string") {
            cook = [j["sitePath"]];
          }

          else {
            cook = [];
            console.log("WTERROR: Piwik, wrong 'sitePath' parameter");
          }

          // SITE PATH
          var root = window.wtPiwikRoot || conf.root;
          if (root[ cook[0] ]) {
            if (cook.length === 1) {
              _paq.push(["setDomains", root[ cook[0] ]]);
            }
          } else {
            _paq.push(["setDomains", j["sitePath"]]);
          }

          // COOKIES
          for (var i = 0, l = cook.length; i < l; i++) {

            var path = "/";

            // remove "http://", "https://" and "//"
            var cookCheck = cook[i].replace(/.*?:?\/\//g, "");

            // remove the starting "/"
            if (cookCheck[0] === "/") {
              cookCheck = cookCheck.slice(1, cookCheck.length);
            }

            // remove the ending "/"
            if (cookCheck.slice(cookCheck.length - 1, cookCheck.length) === "/") {
              cookCheck = cookCheck.slice(0, cookCheck.length - 1);
            }

            // FOUND IN FIRST POSITION
            isFound = (ref.indexOf(cookCheck) !== -1 && ref.indexOf(cookCheck) < 9);

            // CHECK IS REAL FOUND
            if (isFound) {

              isFound = (ref.indexOf(cookCheck) !== -1 || ref === cookCheck);

              if (isFound) {

                var path = cookCheck.split("/")[0];
                path = cookCheck.replace(path, "");
                path = (path === "") ? "/" : path;

                _paq.push(['setCookiePath', path]);

                canBeProcess = true;
              }
            }
          }
        }

        // LANGUAGE
        if (j["lang"]) { // USER
          _paq.push(["setCustomDimension", 1, j["lang"]]);
        }
        else if ($wt.getDocLang(true) !== false) { // UEC
          _paq.push(["setCustomDimension", 1, $wt.getDocLang(true)]);
        }
        else {
          _paq.push(["setCustomDimension", 1, "unknown"]);
        }

        // SECTION
        if (j["siteSection"]) {
          _paq.push(["setCustomDimension", 2, j["siteSection"]]);
        }

        // 404
        if (j["is404"]) {
          _paq.push(['setDocumentTitle', '404/URL=' + encodeURIComponent(document.location.pathname + document.location.search) + '/From=' + encodeURIComponent(document.referrer)]);
        }

        // 403
        else if (j["is403"]) {
          _paq.push(['setDocumentTitle', '403/URL=' + encodeURIComponent(document.location.pathname + document.location.search) + '/From=' + encodeURIComponent(document.referrer)]);
        }

        // INSTANCE
        var instance = j["instance"] || 'ec.europa.eu';

        var trackerURL = conf[instance].url;
        _paq.push(['setTrackerUrl', trackerURL + 'piwik.php']);

        // SEARCH
        if (j["search"]) {
          var keyword = (j["search"]["keyword"]) ? j["search"]["keyword"] : "";
          var category = (j["search"]["category"]) ? j["search"]["category"] : false;
          var count = (j["search"]["count"]) ? j["search"]["count"] : false;
          _paq.push(['trackSiteSearch', keyword, category, count]);
        }

        // BEFORE
        if (j["before"]) {
          if (typeof window[j["before"]] === "function") {
            _paq = window[j["before"]](_paq);
          }
        }

        if (!j["search"] && !j._frame) {
          _paq.push(['trackPageView']);
        }

        // OTHERS
        _paq.push(['enableLinkTracking']);
        _paq.push(['setDoNotTrack', true]);

        // MOBILE
        var _fixMobile = function(event) {

          // source element
          var el = event.srcElement || event.target;
          while (el && !el.href) {
            el = el.parentNode;
          }

          // --------------------------------
          // CASE DO NOT TRACK
          // - not mobile
          // - Is not a valid link,
          // - It was not fired from a secondary mouse button.
          // - If the target is _blank don't run the code.
          // --------------------------------

          if ( !el || (!el.href || !'ontouchstart' in window) || (event.which !== 1 && event.which !== 2 || el.getAttribute("target")+"").toLowerCase() === "_blank") {
            return true;
          }

          // Check if the link is external
          var isExternal =  (function () {

            // If is a Javascript link
            if ( el.href.match(/^(javascript|mailto|#)/i) ){
              return false;
            }

            // Remove the prefix of the link (http, https, etc).
            var s = el.href.replace(/^.*:\/\//i, '');

            // Match the link agains the available sitePaths
            for (var i in j['sitePath']) {
              var r = new RegExp('^' + j['sitePath'][i]);
              if (r.test(s)) {
                return false;
              }
            }

            return true;

          })();


          // Is it a document
          var isDocument = (function() {

            // Does the Element already have the class piwik_download
            if ( (el.className+"").indexOf("piwik_download") !== -1 ) {
              return true;
            }

            // Extensions to be treated as download links, source Piwik
            var d = ['7z','aac','apk','arc','arj','asf','asx','avi','azw3','bin','csv','deb','dmg','doc','docx','epub','exe','flv','gif','gz','gzip','hqx','ibooks','jar','jpg','jpeg','js','mobi','mp2','mp3','mp4','mpg','mpeg','mov','movie','msi','msp','odb','odf','odg','ods','odt','ogg','ogv','pdf','phps','png','ppt','pptx','qt','qtm','ra','ram','rar','rpm','sea','sit','tar','tbz','tbz2','bz','bz2','tgz','torrent','txt','wav','wma','wmv','wpd','xls','xlsx','xml','z','zip'];

            var p = new RegExp('\\.(' + d.join('|') + ')([?&#]|$)', 'i');

            return p.test(el.getAttribute("href"));

          })();

          // Only perform the delay if one of this cases.
          if (isExternal || isDocument) {

            event.preventDefault ? event.preventDefault() : event.returnValue = !1;

            clearTimeout(this.piwikClick);

            this.piwikClick = setTimeout(function() {
              window.location.href = el.href;
            }, (j["delay"]||1000));

            return false;

          }

        };

        // process
        if (canBeProcess) {
          var instance_status = conf[instance].status;

          if (instance_status) {
            if ('ontouchstart' in window) {
              $wt.addEvent(document,"click", _fixMobile);
            }

            $wt.include(trackerURL + 'piwik.js', function() {
              if (j["callback"]) {
                if (typeof window[j["callback"]] === "function") {
                  window[j["callback"]]();
                }
              }
            },"js", false, j["async"]);

          } else {
            console.log('WTERROR: [PIWIK] The Piwik instance, [' + instance + '] is down, please try again later');
          }
        }
      }
    }
  };

})(window, document);
