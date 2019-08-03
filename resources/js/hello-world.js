import("hello-world")
    .then(module => {
        module.greet();
    })
    .catch(e => console.error("Error importing `hello-world`:", e));
