# docker/nodejs/Dockerfile
FROM node:18
WORKDIR /app
COPY ./app/nodejs/package*.json ./
RUN npm install
COPY ./app/nodejs .
CMD ["node", "server.js"]