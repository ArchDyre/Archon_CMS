(window.webpackJsonp=window.webpackJsonp||[]).push([[48],{136:function(t,e,n){"use strict";n.d(e,"HclColor",function(){return c}),n.d(e,"HslColor",function(){return i}),n.d(e,"Conversion",function(){return l}),n.d(e,"MonochromaticPalette",function(){return u}),n.d(e,"ComplementaryPalette",function(){return h}),n.d(e,"AnalogousPalette",function(){return f}),n.d(e,"TriadPalette",function(){return m});var r=n(5),o=n(34);class a{constructor(t,e,n){this.l=t,this.a=e,this.b=n,r.Preconditions.checkArgument(0<=t&&t<=100,"{}",t)}}class c{constructor(t,e,n){this.h=t,this.c=e,this.l=n,r.Preconditions.checkArgument(0<=n&&n<=100,"{}",n),this.h=t-360*Math.floor(t/360)}}class s{constructor(t,e,n){this.x=t,this.y=e,this.z=n}}class i{constructor(t,e,n){this.h=t,this.s=e,this.l=n,r.Preconditions.checkArgument(0<=e&&e<=100,"S({}) out of range",e),r.Preconditions.checkArgument(0<=n&&n<=100,"L({}) out of range",n),this.h=t-360*Math.floor(t/360)}}class l{constructor(){}static toHsl(t){if(t instanceof i)return t;const e=l.toRgb(t);return l.rgbToHsl(e)}static toLab(t){if(t instanceof o.RgbColor){const e=l.rgbToXyz(t);return l.xyzToLab(e)}if(t instanceof s)return l.xyzToLab(t);if(t instanceof c)return l.hclToLab(t);if(t instanceof i){const e=l.hslToRgb(t),n=l.rgbToXyz(e);return l.xyzToLab(n)}return t}static toRgb(t){if(t instanceof s)return l.xyzToRgb(t);if(t instanceof a){const e=l.labToXyz(t);return l.xyzToRgb(e)}if(t instanceof c){const e=l.hclToLab(t),n=l.labToXyz(e);return l.xyzToRgb(n)}return t instanceof i?l.hslToRgb(t):t}static toHcl(t){if(t instanceof o.RgbColor){const e=l.rgbToXyz(t),n=l.xyzToLab(e);return l.labToHcl(n)}if(t instanceof a)return l.labToHcl(t);if(t instanceof s){const e=l.xyzToLab(t);return l.labToHcl(e)}if(t instanceof i){const e=l.hslToRgb(t),n=l.rgbToXyz(e),r=l.xyzToLab(n);return l.labToHcl(r)}return t}static toXyz(t){if(t instanceof o.RgbColor)return l.rgbToXyz(t);if(t instanceof a)return l.labToXyz(t);if(t instanceof c){const e=l.hclToLab(t);return l.labToXyz(e)}if(t instanceof i){const e=l.hslToRgb(t);return l.rgbToXyz(e)}return t}static toCmyk(t){if(t instanceof o.RgbColor)return l.rgbToCmyk(t);const e=l.toRgb(t);return l.rgbToCmyk(e)}static toHexString(t){return l.toRgb(t).toHexString()}static toRgbString(t){return l.toRgb(t).toRgbString()}static toHslString(t){const e=l.toHsl(t);return`hsl(${e.h}, ${e.s}%, ${e.l}%)`}static hclToLab(t){const e=t.h*Math.PI/180,n=Math.cos(e)*t.c,r=Math.sin(e)*t.c;return new a(t.l,n,r)}static labToHcl(t){const{a:e,b:n}=t,r=180*Math.atan2(n,e)/Math.PI,o=Math.sqrt(Math.pow(e,2)+Math.pow(n,2));return new c(r,o,t.l)}static labToXyz(t){const{D50:e,"κ":n,"ε":r}=g,{l:o,a:a,b:c}=t,i=(o+16)/116,l=i+a/500,u=i-c/200;let h=Math.pow(l,3)>r?Math.pow(l,3):(116*l-16)/n,f=o>n*r?Math.pow((o+16)/116,3):o/n,m=Math.pow(u,3)>r?Math.pow(u,3):(116*u-16)/n;return h*=e.x,f*=e.y,m*=e.z,new s(h,f,m)}static xyzToLab(t){const{D50:e,"κ":n,"ε":r}=g;let{x:o,y:c,z:s}=t;o/=e.x,c/=e.y,s/=e.z;const i=t=>t>r?Math.cbrt(t):(n*t+16)/116,l=i(o),u=i(c),h=i(s);return new a(116*u-16,500*(l-u),200*(u-h))}static xyzToRgb(t){const e=t.x/100,n=t.y/100,r=t.z/100;let a=3.1338561*e-1.6168667*n-.4906146*r,c=-.9787684*e+1.9161415*n+.033454*r,s=.0719453*e-.2289914*n+1.4052427*r;const i=t=>t<=.0031308?12.92*t:1.055*Math.pow(t,1/2.4)-.055;a=i(a),c=i(c),s=i(s),a=Math.round(255*a),c=Math.round(255*c),s=Math.round(255*s);const l=t=>Math.max(Math.min(t,255),0);return a=l(a),c=l(c),s=l(s),new o.RgbColor(a,c,s)}static rgbToXyz(t){let{r:e,g:n,b:r}=t;n/=255,r/=255;const o=t=>t<=.04045?t/12.92:Math.pow((t+.055)/1.055,2.4);let a=.4360747*(e=o(e/=255))+.3850649*(n=o(n))+.1430804*(r=o(r)),c=.2225045*e+.7168786*n+.0606169*r,i=.0139322*e+.0971045*n+.7141733*r;return new s(a*=100,c*=100,i*=100)}static hslToRgb(t,e=!1){const n=t.s/100,r=t.l/100,a=(1-Math.abs(2*r-1))*n,c=t.h/60,s=a*(1-Math.abs(c%2-1)),i=r-.5*a,l=Math.floor(c),g=Math.max([a,s,0,0,s,a][l]+i,0),u=Math.max([s,a,a,s,0,0][l]+i,0),h=Math.max([0,0,s,a,a,s][l]+i,0);return new o.RgbColor(255*g,255*u,255*h)}static rgbToHsl(t){const e=t.r/255,n=t.g/255,r=t.b/255,o=Math.max(e,n,r),a=Math.min(e,n,r),c=o-a,s=(o+a)/2;if(o===a)return new i(0,0,100*s);const l=((t,e,n,r)=>{let o;if(r===t)o=(e-n)/c%6;else if(r===e)o=(n-t)/c+2;else{if(r!==n)return 0;o=(t-e)/c+4}return 60*o})(e,n,r,o),g=1===s?0:c/(1-Math.abs(2*s-1));return new i(l,g>1&&g<1.00001?100:100*g,s>1&&s<1.00001?100:100*s)}static rgbToCmyk(t){const e=t.r/255,n=t.g/255,r=t.b/255,o=1-Math.max(e,n,r),a=1-o;if(1===o)return{c:0,m:0,y:0,k:o};const c=(1-e-o)/a,s=(1-n-o)/a,i=(1-r-o)/a;return{c:Math.round(100*c),m:Math.round(100*s),y:Math.round(100*i),k:Math.round(100*o)}}}const g=Object.freeze({D50:new s(96.42,100,82.51),"κ":24389/27,"ε":216/24389});class u{static getPaletteHsl(t,e){const n=l.toHsl(t),r=n.l>64?-6:n.l<36?0:-3,o=[];for(let t=r;t<r+7;t++)o.push(new i(n.h,n.s,n.l+9*t));return e?o.map(e):o}static getPaletteHcl(t,e){const n=l.toHcl(t),r=n.l>64?-6:n.l<36?0:-3,o=[];for(let t=r;t<r+7;t++)o.push(new c(n.h,n.c,n.l+9*t));return e?o.map(e):o}}class h{static getPalette(t){const e=l.toHcl(t),n=[];e.l<30?n.push(new c(e.h,e.c,e.l+27),new c(e.h,e.c,e.l+18),new c(e.h,e.c,e.l+9),e):n.push(new c(e.h,e.c,e.l-27),new c(e.h,e.c,e.l-18),new c(e.h,e.c,e.l-9),e);const r=new c(b(e.h+180,0,360),e.c,e.l);return r.l<20?n.push(r,new c(r.h,r.c,r.l+9),new c(r.h,r.c,r.l+18)):n.push(r,new c(r.h,r.c,r.l-9),new c(r.h,r.c,r.l-18)),n.map(l.toHexString)}}class f{static getPalette(t){return f.getPalatteHcl(t)}static getPalatteHcl(t){const e=l.toHcl(t),n=[];for(let t=-3;t<=3;t++)n.push(new c(b(e.h+18*t,0,360),e.c,e.l));return n.map(l.toHexString)}static getPalatteHsl(t){const e=l.toHsl(t),n=[];for(let t=-3;t<=3;t++)n.push(new i(b(e.h+18*t,0,360),e.s,e.l));return n.map(l.toHexString)}}class m{static getPalette(t){const e=l.toHcl(t),n=[];for(let t=-3;t<=3;t++)n.push(new c(b(e.h+30*t,0,360),e.c,e.l));return n.map(l.toHexString)}}function b(t,e,n){if(t<e){return n-(e-t)}if(t>n){return e+(t-n)}return t}},1532:function(t,e,n){"use strict";n.d(e,"ColorWheelPrintPage",function(){return b});var r=n(34),o=n(136),a=n(246),c=n(48),s=n(41),i=n(4),l=n(6),g=n(0),u=n(15),h=n(85),f=n(439),m=n(606);let b=class extends s.PageComponent{componentDidMount(){window&&window.print()}renderPage(){const t=this.props.colors.split("+").map(t=>"#"+t).reduce((t,e)=>{try{const n=r.RgbColor.fromHexString(e),a=o.Conversion.toCmyk(n);return t.push({hex:e,rgb:n,cmyk:a}),t}catch(e){return t}},[]),e=Object(u.getTemplateUrlInfo)(this.props._routingInfo,h.WikiColorsPages.color_wheel).url,n={defaultMetadataOptions:{routingInfo:this.props._routingInfo,page:h.WikiColorsPages.color_wheel_print,pageTitle:m.Messages.pageTitle(),siteName:m.Messages.siteName(),description:m.Messages.metaDescription(),noIndex:!0,canonicalUrl:e}},s=(t,e)=>g.createElement("tr",null,g.createElement("th",{className:f.default.tableHeading},g.createElement(i.Text.LargeSemiBold,{alignment:"start",color:"monoBlackA150"},t)),g.createElement("td",{className:f.default.tableCell},g.createElement(i.Text.LargeSemiBold,{alignment:"start"},e)));return g.createElement(g.Fragment,null,g.createElement(c.PageHead,{metadata:n},g.createElement("title",null,m.Messages.pageTitle())),g.createElement("div",{className:f.default.wrapper},g.createElement("div",{className:f.default.colorBlocksContainer},t.map((t,e)=>g.createElement("div",{key:e,className:f.default.colorBlock},g.createElement("svg",{className:f.default.svg,width:"255",height:"255",viewBox:"0 0 255 255",fill:"none",xmlns:"http://www.w3.org/2000/svg"},g.createElement("rect",{width:"255",height:"255",rx:"6",fill:t.hex})),g.createElement("table",null,g.createElement("tbody",null,s("HEX",t.hex),s("RGB",`${t.rgb.r}, ${t.rgb.g}, ${t.rgb.b}`),s("CMYK",`${t.cmyk.c}, ${t.cmyk.m}, ${t.cmyk.y}, ${t.cmyk.k}`)))))),g.createElement("div",{className:f.default.footer},g.createElement("div",{className:f.default.logoContainer},g.createElement("div",{className:f.default.logo},g.createElement(a.CanvaLogo,null)),g.createElement("span",{className:f.default.logoText},g.createElement(i.Text.Large,{tagName:"span",margins:"none"},m.Messages.logoText()))),g.createElement(i.Text.TitleMedium,null,"canva.com"))))}};b=function(t,e,n,r){var o,a=arguments.length,c=a<3?e:null===r?r=Object.getOwnPropertyDescriptor(e,n):r;if("object"==typeof Reflect&&"function"==typeof Reflect.decorate)c=Reflect.decorate(t,e,n,r);else for(var s=t.length-1;s>=0;s--)(o=t[s])&&(c=(a<3?o(c):a>3?o(e,n,c):o(e,n))||c);return a>3&&c&&Object.defineProperty(e,n,c),c}([l.b],b)},1879:function(t,e,n){__NEXT_REGISTER_PAGE("/wiki/colors/color_wheel_print",function(){return t.exports=n(1880),{page:t.exports.default}})},1880:function(t,e,n){"use strict";n.r(e);var r=n(1532);e.default=r.ColorWheelPrintPage},34:function(t,e,n){"use strict";n.d(e,"RgbColor",function(){return g});var r=n(5);const o=/^#?([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i,a=/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/,c=/^rgba\((\d+),\s*(\d+),\s*(\d+),\s*([0-9]*\.?[0-9]+)\)$/;function s(t){return(256+t).toString(16).slice(-2)}function i(t){return parseInt(t,16)}class l{static fromHexString(t){const e=o.exec(t);if(!e)throw new Error(`invalid hexadecimal color: ${t}`);return new g(i(e[1]),i(e[2]),i(e[3]))}static fromRgbString(t){const e=a.exec(t);if(!e)throw new Error(`invalid rgb color: ${t}`);return new g(+e[1],+e[2],+e[3])}static fromRgbaString(t){const e=c.exec(t);if(!e)throw new Error(`invalid rgba color: ${t}`);return new u(+e[1],+e[2],+e[3],+e[4])}static toHexString(t){return`#${s(Math.round(t.r))}${s(Math.round(t.g))}${s(Math.round(t.b))}`}static toRgbString(t){return`rgb(${Math.round(t.r)},${Math.round(t.g)},${Math.round(t.b)})`}static toRgbaString(t){return`rgba(${Math.round(t.r)},${Math.round(t.g)},${Math.round(t.b)},${t.a})`}constructor(){}}class g{constructor(t,e,n){this.r=t,this.g=e,this.b=n,r.Preconditions.checkArgument(0<=t&&t<=255,"invalid r: {}",t),r.Preconditions.checkArgument(0<=e&&e<=255,"invalid g: {}",e),r.Preconditions.checkArgument(0<=n&&n<=255,"invalid b: {}",n)}static fromHexString(t){return l.fromHexString(t)}static fromRgbString(t){return l.fromRgbString(t)}toRgbaColor(t=1){return new u(this.r,this.g,this.b,t)}toHexString(){return l.toHexString(this)}toRgbString(){return l.toRgbString(this)}getLuminance(){return Math.round(.2126*this.r+.7152*this.g+.0722*this.b)}}class u{constructor(t,e,n,o){this.r=t,this.g=e,this.b=n,this.a=o,r.Preconditions.checkArgument(0<=t&&t<=255,"invalid r: {}",t),r.Preconditions.checkArgument(0<=e&&e<=255,"invalid g: {}",e),r.Preconditions.checkArgument(0<=n&&n<=255,"invalid b: {}",n),r.Preconditions.checkArgument(0<=o&&o<=1,"invalid a: {}",o)}static fromRgbaString(t){return l.fromRgbaString(t)}toRgbaString(){return l.toRgbaString(this)}}},439:function(t,e,n){"use strict";e.default={monoBlackA200:"rgba(14, 19, 24, 0.45)",gridBaseline:"8px",mediaTabletUp:"(min-width: 48em)",wrapper:"_222x1cKsI7jSahOLCq8TJ0",colorBlocksContainer:"m1aLEtpvbn5W-9-yBptU4",colorBlock:"_1b64iE-eImNpvDNTXqd1rq",svg:"_3KfDjVp6svgpt8D0tGkZH7",tableHeading:"_3dVAAekyWr6hAvCs173h79",tableCell:"tPOnG0uBjX8Q9U2jgJEKW",footer:"_2vrQYyoNBM4M4Sej_TsDWq",logoContainer:"_3a-qXRRqKSkHQQichg_Un2",logoText:"_2ChRruYMbsjkiCS1qjQlyF",logo:"HSe3i1JwSybgVhxXY12EG"}},606:function(t,e,n){"use strict";n.d(e,"Messages",function(){return o});var r=n(1);const o={logoText:()=>Object(r.formatString)("11ca37548aa479a0e2d747d809cb810fd83c7efe","Design anything. Publish anywhere.",[]),pageTitle:()=>Object(r.formatString)("2fc8663928ef77fa45aa27e6c39f7fb77a35c7aa","Color wheel - color theory and calculator | Canva Colors",[]),metaDescription:()=>Object(r.formatString)("5bc2fdff3050c183d8cbd9b255a6741aaa07da5a","Use Canva's color wheel to find out what colors go well together and generate the perfect color schemes for your next project",[]),siteName:()=>Object(r.formatString)("dc7998365896d89fda849079787bf8c2dbc3f3a5","Canva's Design Wiki",[])}},85:function(t,e,n){"use strict";n.d(e,"WikiColorsPages",function(){return r});const r={home:{namespace:"WikiColors",pageName:"home"},color_meanings:{namespace:"WikiColors",pageName:"color_meanings"},color:{namespace:"WikiColors",pageName:"color"},combination:{namespace:"WikiColors",pageName:"combination"},combinations_list:{namespace:"WikiColors",pageName:"combinations_list"},combinations_list_page:{namespace:"WikiColors",pageName:"combinations_list_page"},color_wheel:{namespace:"WikiColors",pageName:"color_wheel"},color_wheel_print:{namespace:"WikiColors",pageName:"color_wheel_print"}}}},[[1879,0,1]]]);