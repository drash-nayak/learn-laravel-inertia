import hljs from "highlight.js"
/*import javascript from "highlight.js/lib/languages/javascript"
import php from "highlight.js/lib/languages/php"
import html from "highlight.js/lib/languages/xml"
import yaml from "highlight.js/lib/languages/yaml"

hljs.registerLanguage(javascript);
hljs.registerLanguage(php);
hljs.registerLanguage(html);
hljs.registerLanguage(yaml);
*/

export function hightlight(selector){
    if(! selector){
        hljs.highlightAll();

        return;
    }
    document.querySelectorAll(selector + ' pre code').forEach(hightlightElement);
}

export function hightlightElement(element){
    hljs.highlightElement(element);
}
