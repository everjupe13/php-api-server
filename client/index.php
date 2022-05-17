<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./client/assets/style.css">
</head>

<body>
    <div id="app">
        <div class="container">

            <div class="row">
                <div class="six columns"><h1>{{ message }}</h1></div>
                <div class="six columns"></div>
            </div>

            <form class="main-form" @submit.prevent>
                <div class="row">
                    <div class="six columns">
                        <label for="exampleEmailInput">Your email</label>
                        <input class="u-full-width" type="email" @input="loop" v-model="email" placeholder="test@mailbox.com" id="exampleEmailInput">
                    </div>
                    <div class="six columns">
                        <label for="exampleRecipientInput">Reason for contacting</label>
                        <select v-model="option" class="u-full-width" id="exampleRecipientInput">
                            <option value="Questions">Questions</option>
                            <option value="Admiration">Admiration</option>
                            <option value="Can I get your number?">Can I get your number?</option>
                        </select>
                    </div>
                </div>
                <label for="exampleMessage">Message</label>
                <textarea @input="loop" v-model="messageBody" class="u-full-width" placeholder="Hi Dave …" id="exampleMessage"></textarea>
                <label class="example-send-yourself-copy">
                    <input v-model="sendCopy" type="checkbox">
                    <span class="label-body">Send a copy to yourself</span>
                </label>
                <button class="button-primary sbt-btn" @click="sendData">Submit!</button>
            </form>

        </div>
    </div>

    <script src="https://unpkg.com/vue@3"></script>
    <script src="./client/assets/script.js"></script>
</body>

</html>