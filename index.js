


        document.getElementById('sendEmailBtn').addEventListener('click', function() {

            console.log('Am clicked')
            fetch('index.php', {
                method: 'POST'
            })
            .then(response => {
                if (response.ok) {
                    alert('Email sent successfully!');
                } else {
                    alert('Failed to send email.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Failed to send email.');
            });
        });
