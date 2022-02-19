FROM ubuntu:latest

RUN apt-get update \
    && apt-get install -y bash \
    nginx

CMD ["nginx", "-g", "daemon off;"]
