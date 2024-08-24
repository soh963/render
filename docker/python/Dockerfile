# docker/python/Dockerfile
FROM python:3.11
WORKDIR /app
COPY ./app/python/requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt
COPY ./app/python .
CMD ["python", "app.py"]