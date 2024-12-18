function generateSlug(inputElement) {
    const value = inputElement.value;
    const slug = value.toLowerCase()
        .replace(/[^a-z0-9]+/g, '-') // Alfanümerik olmayan karakterleri `-` ile değiştir
        .replace(/^-+|-+$/g, ''); // Baştaki ve sondaki `-` işaretlerini kaldır

    // title_id alanını bul ve slug'ı yerleştir
    const slugField = document.querySelector('[name="title_id"]');
    if (slugField) {
        slugField.value = slug;
    }
}
