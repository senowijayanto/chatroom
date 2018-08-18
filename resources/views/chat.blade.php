<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chat</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style media="screen">
      .list-group {
        overflow-y: scroll;
        height: 200px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row" id="app">
        <div class="offset-4 col-4">
          <li class="list-group-item active">Chat Room</li>
          <ul class="list-group" v-chat-scroll>
            <Message
              v-for="(value, index) in chat.message"
              :key="index"
              color="info">
              @{{value}}
            </Message>
          </ul>
          <input type="text"
          class="form-control"
          placeholder="Type your message here..."
          v-model="message"
          @keyup.enter="send"
          >
        </div>
      </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
