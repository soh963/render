# 기본 이미지로 Node.js를 사용
FROM node:14

# 앱 디렉토리 생성
WORKDIR /usr/src/app

# 앱 의존성 설치
# package.json과 package-lock.json을 모두 복사
COPY package*.json ./

RUN npm install

# 앱 소스 추가
COPY . .

# 환경 변수 설정 (필요한 경우)
# ENV NODE_ENV production

# 앱이 3000번 포트에서 실행됨을 알림
EXPOSE 3000

# 앱 실행
CMD [ "node", "server.js" ]