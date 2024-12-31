$(document).ready(function() {
    $('.configImg.imgs').each(function() {
        var img = $(this);
        var maxWidth = 200; // adjust the maximum width and height to your liking
        var maxHeight = 150;
        var width = img.width();
        var height = img.height();

        if (width > maxWidth || height > maxHeight) {
            // image is too large, scale it down
            var scale = Math.min(maxWidth / width, maxHeight / height);
            img.width(width * scale);
            img.height(height * scale);
        } else {
            // image is too small, scale it up
            var scale = Math.max(maxWidth / width, maxHeight / height);
            img.width(width * scale);
            img.height(height * scale);
        }
    });
});