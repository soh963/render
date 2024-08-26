FROM node:14

# 작업 디렉토리 설정
WORKDIR /usr/src/app

# 패키지 파일 복사 및 의존성 설치
COPY package*.json ./
RUN npm install

# 애플리케이션 소스 복사
COPY . .

# 포트 설정
EXPOSE 3000

# 애플리케이션 실행
CMD ["npm", "start"]