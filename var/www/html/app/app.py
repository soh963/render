from flask import Flask

app = Flask(__name__)

@app.route("/")
def hello():
    return "Hello, Render with Docker and Flask! 안녕하세요 hi my name is kang"

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000)
