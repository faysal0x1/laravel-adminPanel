function setupQuillEditor(editorId, descId) {
    // Function to load CSS
    function loadCSS(url) {
        return new Promise((resolve, reject) => {
            var link = document.createElement("link");
            link.rel = "stylesheet";
            link.href = url;
            link.onload = resolve;
            link.onerror = reject;
            document.head.appendChild(link);
        });
    }

    // Function to load JS
    function loadScript(url) {
        return new Promise((resolve, reject) => {
            var script = document.createElement("script");
            script.src = url;
            script.onload = resolve;
            script.onerror = reject;
            document.body.appendChild(script);
        });
    }

    // Add custom styles
    function addCustomStyles() {
        var style = document.createElement("style");
        style.textContent = `
            .ql-editor {
                min-height: 200px;
            }
        `;
        document.head.appendChild(style);
    }

    // Initialize Quill
    function initQuill() {
        var quill = new Quill("#" + editorId, {
            theme: "snow",
            modules: {
                toolbar: [
                    [{ header: [1, 2, 3, 4, 5, 6, false] }],
                    ["bold", "italic", "underline", "strike"],
                    ["blockquote", "code-block"],
                    [{ list: "ordered" }, { list: "bullet" }],
                    [{ script: "sub" }, { script: "super" }],
                    [{ indent: "-1" }, { indent: "+1" }],
                    [{ direction: "rtl" }],
                    [{ size: ["small", false, "large", "huge"] }],
                    [{ color: [] }, { background: [] }],
                    [{ font: [] }],
                    [{ align: [] }],
                    ["clean"],
                    ["link", "image", "video"],
                ],
            },
        });

        quill.on("text-change", function () {
            document.getElementById(descId).value = quill.root.innerHTML;
        });

        // Handle form submission
        var form = document.querySelector("form");
        if (form) {
            form.onsubmit = function () {
                document.getElementById(descId).value = quill.root.innerHTML;
            };
        }

        return quill;
    }

    // Main setup function
    return Promise.all([
        loadCSS("https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css"),
        loadScript("https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"),
    ])
        .then(() => {
            addCustomStyles();
            return initQuill();
        })
        .catch((error) => {
            console.error("Error setting up Quill:", error);
        });
}


setupQuillEditor('editor', 'desc')
