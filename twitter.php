  <script src="http://widgets.twimg.com/j/2/widget.js"></script>
  <div class="twitter"> 
    <script>
      new TWTR.Widget({
        version: 2,
        type: 'search',
        search: '#ReglamentoCiclista',
        interval: 30000,
        title: '#ReglamentoCiclista',
        subject: 'Reglamento Ciclista',
        width: 250,
        height: 450,
        theme: {
          shell: {
            background: '#c9c9c9',
            color: '#ffffff'
          },
          tweets: {
            background: '#ffffff',
            color: '#444444',
            links: '#1985b5'
          }
        },
        features: {
          scrollbar: false,
          loop: true,
          live: true,
          hashtags: true,
          timestamp: true,
          avatars: true,
          toptweets: true,
          behavior: 'default'
        }
      }).render().start();
    </script>
  </div>