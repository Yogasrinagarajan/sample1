<a href="/">back</a>
<h1>saafdsffgc</h1>
<h3>products</h3>
<body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Title</td>
         </tr>
         @foreach ($test as $tst)
         <tr>
            <td>{{ $tst}}</td>
           
         </tr>
         @endforeach
      </table>
   </body>
