#!/bin/bash

asciidoctor index.adoc -o index.new
git stash save
git checkout gh-pages
mv index.new index.html
cat <<EOD
# Verify new index then
git commit index.html
git push origin HEAD
git checkout master
git stash pop
# Verify online
git commit index.adoc
EOD
