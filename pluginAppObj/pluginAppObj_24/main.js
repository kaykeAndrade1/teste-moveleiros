function decode_html(encoded) {
    encoded = replaceAll("&amp;gt;", ">", encoded);
    encoded = replaceAll("&amp;lt;", "<", encoded);
    encoded = replaceAll("\\\'", "\'", encoded);
    encoded = replaceAll("&quot;", "\"", encoded);
    encoded = replaceAll("&lt;br /&gt;", "\n", encoded);
    encoded = replaceAll("&amp;", "&", encoded);
    encoded = replaceAll("\\\\", "\\", encoded);
    return encoded;
}

function replaceAll(find, replace, str) {
    return str.replace(new RegExp(find, 'g'), replace);
}

function br(text) {

    var brRegex = new RegExp("(<br\\s\/>|<br>)", "g");
    var str = text
        .replace(/&gt;/g, ">")
        .replace(/&lt;/g, "<")
        .replace(/&amp;/g, "&")
        .replace(/&quot;/g, "\"")
        .replace(/&gt;/g, ">")
        .replace(/&lt;/g, "<")
        .replace(/&amp;/g, "&")
        .replace(/&quot;/g, "\"")
        .replace(/\r/g, "")
        .replace(/\n/g, "")
        .replace(brRegex, "<br>");

    return str;
}

function hoverimage_pluginAppObj_24() {
    
    x5engine.boot.push(function(){
        var container = $("#pluginAppObj_24 .container");
        
        if (x5engine != null && !x5engine.responsive.isMobileDevice()) {
            container.addClass("no-touch");
        }
        else {
            container.addClass("touch");
            var figure = document.getElementById("pluginAppObj_24-figure");
            var superContainer = document.getElementById("pluginAppObj_24");
            superContainer.addEventListener( 'touchstart', function(e) {
                if ( $(figure).hasClass("cs-hover") ) {
                    $(figure).removeClass("cs-hover");
                }
                else {
                    $(figure).addClass("cs-hover");
                }
            }, false );
        }
    
        if ( 1 == 2 ||  1 == 7 ) {
            $("#pluginAppObj_24").css("z-index", "2000");
        }
    
    });
}
