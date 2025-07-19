const sliders = ["m1", "m2", "m3", "m4", "m5", "m6"];

sliders.forEach((id, i) => {
    document.getElementById(id).oninput = function () {
        document.getElementById("v" + (i + 1)).innerText = this.value;
    };
});

function reset() {
    sliders.forEach((id, i) => {
        document.getElementById(id).value = 90;
        document.getElementById("v" + (i + 1)).innerText = 90;
    });
}

function savePose() {
    let values = sliders.map(id => document.getElementById(id).value);
    fetch("save_pose.php", {
        method: "POST",
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ motors: values })
    }).then(() => loadTable());
}

function loadTable() {
    fetch("get_run_pose.php")
        .then(res => res.text())
        .then(html => {
            document.getElementById("table").innerHTML = html;
        });
}

function run() {
    alert("▶️ Running Pose - sending to robot arm (simulation)...");
}

function loadPose(id) {
    fetch(`get_run_pose.php?id=${id}`)
        .then(res => res.json())
        .then(data => {
            sliders.forEach((id, i) => {
                document.getElementById(id).value = data[i];
                document.getElementById("v" + (i + 1)).innerText = data[i];
            });
        });
}

function removePose(id) {
    fetch(`update_status.php?id=${id}`, { method: "POST" })
        .then(() => loadTable());
}

window.onload = loadTable;
