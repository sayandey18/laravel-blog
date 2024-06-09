// Header Toggle JS
var toggleOpen = document.getElementById('toggleOpen');
var toggleClose = document.getElementById('toggleClose');
var collapseMenu = document.getElementById('collapseMenu');

function handleClick() {
    if (collapseMenu.style.display === 'block') {
        collapseMenu.style.display = 'none';
    } else {
        collapseMenu.style.display = 'block';
    }
}

if (toggleOpen) {
    toggleOpen.addEventListener('click', handleClick);
}
if (toggleClose) {
    toggleClose.addEventListener('click', handleClick);
}


// Generate category slug
var categoryInput = document.getElementById('category');
var categorySlugInput = document.getElementById('category_slug');
var tagInput = document.getElementById('tag');
var tagSlugInput = document.getElementById('tag_slug');

function generateSlug(str) {
    return str
        .toLowerCase()
        .trim()
        .replace(/[^\w\s-]/g, '')
        .replace(/[\s_-]+/g, '-')
        .replace(/^-+|-+$/g, '');
}

if (categoryInput && categorySlugInput) {
    categoryInput.addEventListener('input', function () {
        var slug = generateSlug(categoryInput.value);
        categorySlugInput.value = slug;
    });
}

if (tagInput && tagSlugInput) {
    tagInput.addEventListener('input', function () {
        var slug = generateSlug(tagInput.value);
        tagSlugInput.value = slug;
    });
}