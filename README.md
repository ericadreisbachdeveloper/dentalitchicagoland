# README.md
A repository for a lightweight PHP / CSS / JavaScript build supporting Dental IT Chicagoland. 

## Current-gen SEO/AEO

### `./well-known/ai-catalog.json` 
Currently building `ai-catalog.json` since that's the version that Google is looking for, and symlinking to the emerging standard `ard.json`. 

On remote: 
<pre>
$ cd ./well-known
$ ln -s ai-catalog.json ard.json
</pre>

File includes: 
- displayName
- type: text/markdown
- url: markdown 
- description 
- tags
- representativeQueries


### `sitemap.xml` 

Classic. 


### `robots.txt` 

Classic. In most builds i block aggressive bots, but for this website i invite them all. 


### `llms.txt` 

An emerging standard. Generally incluees bulletpoints, summaries, need-to-know content. 


### Markdown mirrors 

All content available as a `$.md` version, indexed in `llms.txt`. 



## Speed optimizations 

### Font reduced to Latin characters

<pre>
# ttf2woff2.sh converts .ttf in a directory .woff2 and limited to the Latin character set: 

$ for f in *.ttf; do
  pyftsubset "$f" \
    --output-file="${f%.ttf}.woff2" \
    --flavor=woff2 \
    --unicodes="U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD"
done
</pre>