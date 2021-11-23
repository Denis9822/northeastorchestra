<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @foreach($brands as $brand)
    <url>
        <loc>{{url($brand['URL'])}}</loc>
        <lastmod>{{ \Carbon\Carbon::parse($brand['updated_at'])->toAtomString() }}</lastmod>
    </url>
    @endforeach
</urlset>
