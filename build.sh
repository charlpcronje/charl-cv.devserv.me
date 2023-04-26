retype build
cd public
find . -name "*.html" -exec sed -i 's/m = localStorage.getItem("doc_theme")/m = "dark"/g' {} \;
cd ..