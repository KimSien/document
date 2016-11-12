# Foundation Document

    foundation is css framework. current ver 6.
    
# Reference

[Foundation for site](http://foundation.zurb.com/sites/docs/)

setup pattern
- 1 download select box checked. zip open css,js files
- 2 sass @include.

# first touch
- [Zurb Foundation 導入前の予備知識](http://qiita.com/kohki-shikata/items/bd6cfda580a54159232e)
- [cli install](http://qiita.com/kohki-shikata/items/1abe8d79388ab90e3730)


# Index
- 1 speed up the foundation constructing
- 2 Q & A detail check and tutorials.
- 3 thiking about foundation relation technology
- 4 cheet

---------------

---------------

# 1 speed up the foundation constructing

- require enviroment setting?
- enough reading document?
- are you answer with detailed question?
- your setting tutorial and lesson create.

all technic cover from foundation flamework.
you should be checking this.


css
js

thinking・・・・

priority setting.

general used. -> class tag.
check the document. -> enviroments setting.




---------------

---------------

# 2 Q & A detail check


----------------
## basic
- Q do you know 3 way for foundation flamework. 
- A fulll download. custom download. used npm for include sass


- tutorial

include sass development.


----------------
## QA basic scss

[not foundations mediaquery include](http://qiita.com/kyaido/items/828906ffa7198e99d0b7)

- Q how do mediaquery writing sass?
- A foundation case

tag{
    @include breakpoint(small only){}
    @include breakpoint(medium){}
}

## QA base tag,style

- Q ol or ul list. valiation foundation basic tag expression?
- A 

ul is not attempt order. ol is attempt order.
other list style

## QA grid

basic foundation colum control

- [colum confrol](http://qiita.com/ishidamakot/items/2467cfae58d3de4f2137)
- [Grid](http://foundation.zurb.com/sites/docs/v/5.5.3/components/grid.html)

 grid is enabled nest. 
 even if you do not setting numeric that grid and flex grid class is have set position and width.


- Q exclusion to padding space with grid
- A collapse-> not padding
uncollapse-> default use padding

```

example emmet)
div.row.collapse>div.large-4*3

```

- Q difference by grid flex-grid
- A until now grid style is grid
flex-grid is basic grid + flexible style grid system
not setting colum numeric. grid position setting etc


## tutorial grid

- lv1 making nomal style grid
- lv2 non setting numeric grid
- lv3 breakpoint and event control js.

---------------
## QA slide orbit animation

- Q foundation slide enable by orbit. what include?
- A check motion-ui.css is imported?

## tutorial obit

- lv1 setting obit slide.
- lv2 

---------------
## QA motion-ui

Q @import 'motion-ui'; setting about gulp setting?
A 

```
path add
for example ->  'node_modules/motion-ui/src',

var sassPaths = [
  'node_modules/foundation-sites/scss',
  'node_modules/motion-ui/src',

];

gulp.task('sass', function() {
  return gulp.src('develop/scss/*.scss')
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))

    .pipe(gulp.dest('public/css'));
});

```

## motion-ui tutorial


---------------

## QA other question
please you describe foundation index list document with 30 charactors.

## example tutorial or lesson
- Q changing grid 10. and basic header creation.
- Q interchange mobile device with image.
- Q motion-ui used to animation.
- Q lazy load the image.














--------------------------
# 3 thiking about foundation relation technology

## 3-1 arrangement box.

change logic web positioning box,contents
used float to change flexbox

- ie? old browser display:flex
[flexibility.js](http://www.webcreatorbox.com/tech/ie8-flexbox/)

? galapagos mobile

## 3-2 data-toggle etc --- custom data attribute

[HTML5 カスタムデータ属性「data-*」にJavaScript、jQueryからアクセスする方法](http://dresscording.com/blog/html5/custom_data_attribute.html)

get the custom data. 3way

attr , .data method , selector

attr get element datatype is string

.data is changing data object.

    if you need create the js mini framework.
    this data- attribute used set js function and anmation.

## 3-3 @include scss

npm 

## 3-4 javascript tools

[*](http://foundation.zurb.com/sites/docs/javascript-utilities.html)

this mediaquery mthod using event (windows,refresh) possible?




-------------------------

# 4 cheet

## sass include

### base.sass

```
@charset 'utf-8';

@import 'settings';
@import 'foundation';

// If you'd like to include motion-ui, you need to install the motion-ui sass package.
//
// @import 'motion-ui/motion-ui';

// We include everything by default.  To slim your CSS, remove components you don't use.

@include foundation-global-styles;
@include foundation-grid;
@include foundation-typography;
@include foundation-button;
@include foundation-forms;
@include foundation-visibility-classes;
@include foundation-float-classes;
@include foundation-accordion;
@include foundation-accordion-menu;
@include foundation-badge;
@include foundation-breadcrumbs;
@include foundation-button-group;
@include foundation-callout;
@include foundation-close-button;
@include foundation-drilldown-menu;
@include foundation-dropdown;
@include foundation-dropdown-menu;
@include foundation-flex-video;
@include foundation-label;
@include foundation-media-object;
@include foundation-menu;
@include foundation-off-canvas;
@include foundation-orbit;
@include foundation-pagination;
@include foundation-progress-bar;
@include foundation-slider;
@include foundation-sticky;
@include foundation-reveal;
@include foundation-switch;
@include foundation-table;
@include foundation-tabs;
@include foundation-thumbnail;
@include foundation-title-bar;
@include foundation-tooltip;
@include foundation-top-bar;

// If you'd like to include motion-ui, you need to install the motion-ui sass package.
//
// @include motion-ui-transitions;
// @include motion-ui-animations;

```

### _settings.scss

```
$global-font-size: 100%;
$global-width: rem-calc(1200);
$global-lineheight: 1.5;
$primary-color: #2199e8;
$secondary-color: #777;
$success-color: #3adb76;
$warning-color: #ffae00;
$alert-color: #ec5840;
$light-gray: #e6e6e6;
$medium-gray: #cacaca;
$dark-gray: #8a8a8a;
$black: #0a0a0a;
$white: #fefefe;
$body-background: $white;
$body-font-color: $black;
$body-font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;
$body-antialiased: true;
$global-margin: 1rem;
$global-padding: 1rem;
$global-weight-normal: normal;
$global-weight-bold: bold;
$global-radius: 0;
$global-text-direction: ltr;

```

