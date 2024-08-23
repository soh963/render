# Python 3.12 버전을 베이스 이미지로 사용합니다.
FROM python:3.12-slim

# 작업 디렉토리를 설정합니다.
WORKDIR /app

# 필요한 패키지들을 설치합니다.
COPY requirements.txt .

RUN pip install --no-cache-dir -r requirements.txt

# 애플리케이션 코드를 컨테이너 안으로 복사합니다.
COPY . .

# 애플리케이션이 시작될 때 실행할 명령을 정의합니다.
CMD ["gunicorn", "-w", "4", "-b", "0.0.0.0:5000", "app:app"]

# 애플리케이션이 사용할 포트를 노출합니다.
EXPOSE 5000
