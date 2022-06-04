

likeClick = function (url) {
    fetch(url)
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            document.getElementById('likes').textContent = data.likes;
        });
};


showIncrement = function (url) {
    fetch(url)
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            document.getElementById('shows').textContent = data.shows;
        });
};

addComment = function (action, formData) {
    fetch(action, {
        method: 'post',
        body: formData,
    }).then((response) => {
        return response.json();
    }).then((data) => {
        if (data.success) {
            document.forms.add_comment.textContent = data.success;
        } else {
            document.getElementById('subject_error').textContent = data.fails.subject;
            document.getElementById('body_error').textContent = data.fails.body;
        }
    });
};
