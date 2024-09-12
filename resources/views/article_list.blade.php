<div class="links">
  <table>
     <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>URL</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->url }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>
</div>
