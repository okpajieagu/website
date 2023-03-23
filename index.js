function sendEmail() {
  Email.send({
    Host : "smtp.gmail.com",
    Username : "okpajieaguchimobi@gmail.com",
    Password : "opassword&12",
    To : 'okpajieaguchimobi@gmail.com',
    From : "you@isp.com",
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => alert(message)
);
}
