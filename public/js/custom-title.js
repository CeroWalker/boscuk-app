document.addEventListener('DOMContentLoaded', function () {
    const titleField = document.querySelector('[name="title"]');
    const slugField = document.querySelector('[name="title_id"]');

    if (titleField && slugField) {
        titleField.addEventListener('blur', function () {
            const value = titleField.value;
            const slug = value
                .toLowerCase()
                .replace(/ğ/g, 'g')
                .replace(/ü/g, 'u')
                .replace(/ş/g, 's')
                .replace(/ı/g, 'i')
                .replace(/ö/g, 'o')
                .replace(/ç/g, 'c')
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/^-+|-+$/g, '');

            slugField.value = slug;
        });
    }
});

