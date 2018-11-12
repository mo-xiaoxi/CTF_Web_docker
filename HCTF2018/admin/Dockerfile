FROM python:2.7
RUN apt-get update && apt-get upgrade -y 
ENV PYTHONUNBUFFERED 1
RUN apt-get install  mysql-client -y 
ADD hctf_flask /webapps
WORKDIR /webapps
RUN pip install -r requirements.txt
EXPOSE 9999
CMD ["/webapps/run.sh"]