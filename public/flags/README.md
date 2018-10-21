Country flags in single CSS sprite
==================================

CSS Sprites - a method to optimize page loads by combining a large number of small images into one. 

## Usage

Include CSS file in your HTML code then insert a transparent 1x1 pixel image with classes `flag` and `flag-{country code}`. The country code is in the format ISO 3166-1 alpha-2:

```html
<html>
    <head>
        <link href="flags.css" rel=stylesheet type="text/css">
    </head>
    <body>
        <img src="blank.gif" class="flag flag-cz" alt="Czech Republic" />
    </body>
</html>
```

## Included flags


* Aland Islands (ax)
* Albania (al)
* Andorra (ad)
* Austria (at)
* Belarus (by)
* Belgium (be)
* Bosnia and Herzegovina (ba)
* Bulgaria (bg)
* Croatia (hr)
* Czech Republic (cz)
* Denmark (dk)
* Estonia (ee)
* Faroe Islands (fo)
* Finland (fi)
* France (fr)
* Germany (de)
* Gibraltar (gi)
* Greece (gr)
* Guernsey (gg)
* Holy See (Vatican City State) (va)
* Hungary (hu)
* Iceland (is)
* Ireland (ie)
* Isle of Man (im)
* Italy (it)
* Jersey (je)
* Latvia (lv)
* Liechtenstein (li)
* Lithuania (lt)
* Luxembourg (lu)
* Macedonia, The Former Yugoslav Republic of (mk)
* Malta (mt)
* Moldova, Republic of (md)
* Monaco (mc)
* Montenegro (me)
* Netherlands (nl)
* Norway (no)
* Poland (pl)
* Portugal (pt)
* Romania (ro)
* Russian Federation (ru)
* San Marino (sm)
* Serbia (rs)
* Slovakia (sk)
* Slovenia (si)
* Spain (es)
* Sweden (se)
* Switzerland (ch)
* Ukraine (ua)
* United Kingdom (gb)

## Links

* [CSS Flag Sprites generator](https://www.flag-sprites.com/ "Country flags in single CSS sprite")
* [ISO 3166-1](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)