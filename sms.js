// Load Twilio module
const twilio = require('twilio');

// Set Twilio credentials
const accountSid = 'AC4325d0d3788f4de8e257d2cbd94a1c5f';
const authToken = '19e47caaa614aecbf4d310a9398113ad';
const client = new twilio(accountSid, authToken);
client.calls.create({
    url: 'http://demo.twilio.com/docs/voice.xml', 
    to: '+918750795242',
    from: '+12708129944'
})
    .then(call => console.log(call.sid))
    .catch(error => console.log(error));
