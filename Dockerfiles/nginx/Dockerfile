FROM nginx:stable

LABEL maintainer="toki"

ARG PROJECT_ROOT
RUN echo ${PROJECT_ROOT}

COPY ./Dockerfiles/nginx/conf.d/ /etc/nginx/conf.d
COPY . /var/www/

CMD rm -f /etc/nginx/conf.d/default.conf && envsubst '$$PROJECT_ROOT' < /etc/nginx/conf.d/default.conf.template > /etc/nginx/conf.d/default.conf && nginx -g 'daemon off;'

