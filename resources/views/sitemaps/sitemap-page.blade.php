<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @foreach($pages as $page)
    <url>
        <loc>{{url("/".$page['URL'])}}</loc>
        <lastmod>{{ \Carbon\Carbon::today()->toAtomString() }}</lastmod>
    </url>
    @endforeach
    <url>
        <loc>{{url("/topics-directory")}}</loc>
        <lastmod>{{ \Carbon\Carbon::today()->toAtomString() }}</lastmod>
    </url>
     @foreach($authors as $author)
            <url>
                <loc>{{url($author['URL'] ?? 'author')}}</loc>
                <lastmod>{{ \Carbon\Carbon::today()->toAtomString() }}</lastmod>
            </url>
     @endforeach
</urlset>
