<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @foreach($categories as $category)
    <url>
        <loc>{{url($category['URL'])}}</loc>
        <lastmod>{{ \Carbon\Carbon::today()->toAtomString() }}</lastmod>
    </url>
    @endforeach
</urlset>
