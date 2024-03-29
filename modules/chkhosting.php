<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class chkhosting extends be_module {
	public $searchname = 'Generated Allow List';
	public $searchlist = array(
		'Amazon AWS Server', // testing out checks for AWS
		array( '103.4.8.0', '103.4.15.255' ),
		array( '107.20.0.0', '107.23.255.255' ),
		array( '122.248.192.0', '122.248.255.255' ),
		array( '174.129.0.0', '174.129.255.255' ),
		array( '175.41.128.0', '175.41.191.255' ),
		array( '175.41.192.0', '175.41.255.255' ),
		array( '176.32.64.0', '176.32.95.255' ),
		array( '176.34.0.0', '176.34.63.255' ),
		array( '176.34.128.0', '176.34.255.255' ),
		array( '176.34.64.0', '176.34.127.255' ),
		array( '177.71.128.0', '177.71.255.255' ),
		array( '184.169.128.0', '184.169.255.255' ),
		array( '184.72.0.0', '184.72.63.255' ),
		array( '184.72.128.0', '184.72.255.255' ),
		array( '184.72.64.0', '184.72.127.255' ),
		array( '184.73.0.0', '184.73.255.255' ),
		array( '204.236.128.0', '204.236.191.255' ),
		array( '204.236.192.0', '204.236.255.255' ),
		array( '23.20.0.0', '23.23.255.255' ),
		array( '46.137.0.0', '46.137.127.255' ),
		array( '46.137.128.0', '46.137.191.255' ),
		array( '46.137.192.0', '46.137.255.255' ),
		array( '46.51.128.0', '46.51.191.255' ),
		array( '46.51.192.0', '46.51.207.255' ),
		array( '46.51.216.0', '46.51.223.255' ),
		array( '46.51.224.0', '46.51.255.255' ),
		array( '50.112.0.0', '50.112.255.255' ),
		array( '50.16.0.0', '50.17.255.255' ),
		array( '50.18.0.0', '50.18.255.255' ),
		array( '50.19.0.0', '50.19.255.255' ),
		array( '54.176.0.0', '54.177.255.255' ),
		array( '54.178.0.0', '54.178.255.255' ),
		array( '54.179.0.0', '54.179.255.255' ),
		array( '54.183.0.0', '54.183.255.255' ),
		array( '54.184.0.0', '54.191.255.255' ),
		array( '54.193.0.0', '54.193.255.255' ),
		array( '54.194.0.0', '54.195.255.255' ),
		array( '54.196.0.0', '54.197.255.255' ),
		array( '54.198.0.0', '54.198.255.255' ),
		array( '54.199.0.0', '54.199.255.255' ),
		array( '54.200.0.0', '54.201.255.255' ),
		array( '54.202.0.0', '54.203.255.255' ),
		array( '54.204.0.0', '54.205.255.255' ),
		array( '54.206.0.0', '54.206.255.255' ),
		array( '54.207.0.0', '54.207.255.255' ),
		array( '54.208.0.0', '54.209.255.255' ),
		array( '54.210.0.0', '54.211.255.255' ),
		array( '54.212.0.0', '54.213.255.255' ),
		array( '54.214.0.0', '54.214.255.255' ),
		array( '54.215.0.0', '54.215.255.255' ),
		array( '54.216.0.0', '54.217.255.255' ),
		array( '54.218.0.0', '54.218.255.255' ),
		array( '54.219.0.0', '54.219.255.255' ),
		array( '54.220.0.0', '54.220.255.255' ),
		array( '54.221.0.0', '54.221.255.255' ),
		array( '54.224.0.0', '54.225.255.255' ),
		array( '54.226.0.0', '54.227.255.255' ),
		array( '54.228.0.0', '54.228.255.255' ),
		array( '54.229.0.0', '54.229.255.255' ),
		array( '54.232.0.0', '54.232.255.255' ),
		array( '54.233.0.0', '54.233.63.255' ),
		array( '54.234.0.0', '54.235.255.255' ),
		array( '54.236.0.0', '54.237.255.255' ),
		array( '54.238.0.0', '54.238.255.255' ),
		array( '54.241.0.0', '54.241.255.255' ),
		array( '54.242.0.0', '54.243.255.255' ),
		array( '54.244.0.0', '54.244.255.255' ),
		array( '54.245.0.0', '54.245.255.255' ),
		array( '54.246.0.0', '54.246.255.255' ),
		array( '54.247.0.0', '54.247.255.255' ),
		array( '54.248.0.0', '54.249.255.255' ),
		array( '54.250.0.0', '54.250.255.255' ),
		array( '54.251.0.0', '54.251.255.255' ),
		array( '54.252.0.0', '54.252.255.255' ),
		array( '54.253.0.0', '54.253.255.255' ),
		array( '54.254.0.0', '54.254.255.255' ),
		array( '54.255.0.0', '54.255.255.255' ),
		array( '54.72.0.0', '54.75.255.255' ),
		array( '54.76.0.0', '54.77.255.255' ),
		array( '54.78.0.0', '54.78.255.255' ),
		array( '54.79.0.0', '54.79.255.255' ),
		array( '54.80.0.0', '54.87.255.255' ),
		array( '54.95.0.0', '54.95.255.255' ),
		array( '67.202.0.0', '67.202.63.255' ),
		array( '72.44.32.0', '72.44.63.255' ),
		array( '75.101.128.0', '75.101.255.255' ),
		array( '79.125.0.0', '79.125.127.255' ),
		array( '96.127.0.0', '96.127.63.255' ),
		'Softlayer Hosting',
		array( '81.95.144.0', '81.95.159.255' ),
		array( '46.16.184.0', '46.16.191.255' ),
		array( '159.253.128.0', '159.253.159.255' ),
		array( '159.253.132.252', '159.253.132.255' ),
		array( '159.253.135.252', '159.253.135.255' ),
		array( '159.253.132.248', '159.253.132.251' ),
		array( '159.253.135.0', '159.253.135.3' ),
		array( '159.253.135.4', '159.253.135.7' ),
		array( '159.253.135.248', '159.253.135.251' ),
		array( '159.253.135.224', '159.253.135.227' ),
		array( '159.253.135.228', '159.253.135.231' ),
		array( '159.253.135.232', '159.253.135.235' ),
		array( '159.253.135.240', '159.253.135.243' ),
		array( '159.253.135.244', '159.253.135.247' ),
		array( '159.253.132.244', '159.253.132.247' ),
		array( '159.253.135.12', '159.253.135.15' ),
		array( '159.253.135.16', '159.253.135.19' ),
		array( '159.253.135.20', '159.253.135.23' ),
		array( '159.253.142.48', '159.253.142.55' ),
		array( '159.253.142.224', '159.253.142.231' ),
		array( '159.253.131.0', '159.253.131.7' ),
		array( '159.253.146.8', '159.253.146.11' ),
		array( '159.253.148.140', '159.253.148.143' ),
		array( '37.58.64.0', '37.58.127.255' ),
		array( '159.253.152.252', '159.253.152.255' ),
		array( '159.253.145.252', '159.253.145.255' ),
		array( '159.253.153.92', '159.253.153.95' ),
		array( '159.253.153.188', '159.253.153.191' ),
		array( '159.253.149.252', '159.253.149.255' ),
		array( '159.253.128.0', '159.253.128.3' ),
		array( '159.253.128.4', '159.253.128.7' ),
		array( '159.253.128.8', '159.253.128.11' ),
		array( '159.253.128.252', '159.253.128.255' ),
		array( '159.253.128.12', '159.253.128.15' ),
		array( '159.253.141.120', '159.253.141.123' ),
		array( '159.253.135.96', '159.253.135.99' ),
		array( '159.253.153.4', '159.253.153.7' ),
		array( '159.253.152.96', '159.253.152.99' ),
		array( '37.58.64.252', '37.58.64.255' ),
		array( '5.10.64.0', '5.10.127.255' ),
		array( '159.253.153.72', '159.253.153.75' ),
		array( '159.253.153.132', '159.253.153.135' ),
		array( '159.253.153.148', '159.253.153.151' ),
		array( '159.253.153.184', '159.253.153.187' ),
		array( '5.10.64.1', '5.10.64.1' ),
		array( '159.253.152.76', '159.253.152.79' ),
		array( '159.253.153.140', '159.253.153.143' ),
		array( '159.253.132.100', '159.253.132.103' ),
		array( '159.253.132.116', '159.253.132.119' ),
		array( '159.253.133.104', '159.253.133.107' ),
		array( '159.253.134.132', '159.253.134.135' ),
		array( '159.253.134.204', '159.253.134.207' ),
		array( '159.253.135.112', '159.253.135.115' ),
		array( '5.153.0.0', '5.153.63.255' ),
		array( '5.10.79.24', '5.10.79.31' ),
		array( '5.153.0.240', '5.153.0.247' ),
		array( '5.153.21.128', '5.153.21.131' ),
		array( '5.153.21.92', '5.153.21.95' ),
		array( '5.153.21.132', '5.153.21.135' ),
		array( '5.153.20.8', '5.153.20.15' ),
		array( '5.10.74.252', '5.10.74.255' ),
		array( '5.153.27.60', '5.153.27.63' ),
		array( '5.153.27.164', '5.153.27.167' ),
		array( '185.10.228.0', '185.10.231.255' ),
		array( '159.253.148.28', '159.253.148.31' ),
		array( '37.58.75.28', '37.58.75.31' ),
		array( '37.58.75.204', '37.58.75.207' ),
		array( '37.58.81.136', '37.58.81.139' ),
		array( '37.58.82.4', '37.58.82.7' ),
		'Everhost',
		array( '31.2.216.0', '31.2.223.255' ),
		array( '31.47.208.0', '31.47.215.255' ),
		array( '31.220.128.0', '31.220.131.255' ),
		array( '46.108.155.0', '46.108.155.255' ),
		array( '89.42.8.0', '89.42.8.255' ),
		array( '89.42.108.0', '89.42.109.255' ),
		array( '89.44.16.0', '89.44.31.255' ),
		array( '93.118.64.0', '93.118.79.255' ),
		array( '94.60.152.0', '94.60.159.255' ),
		array( '94.60.160.0', '94.60.191.255' ),
		array( '94.60.192.0', '94.60.199.255' ),
		array( '94.63.0.0', '94.63.31.255' ),
		array( '94.63.32.0', '94.63.47.255' ),
		array( '94.63.56.0', '94.63.63.255' ),
		array( '94.63.64.0', '94.63.71.255' ),
		array( '94.63.128.0', '94.63.135.255' ),
		array( '94.63.152.0', '94.63.159.255' ),
		array( '94.63.192.0', '94.63.207.255' ),
		array( '94.177.4.0', '94.177.5.255' ),
		array( '95.64.24.0', '95.64.31.255' ),
		array( '95.64.32.0', '95.64.32.255' ),
		array( '95.64.41.0', '95.64.41.255' ),
		array( '95.64.42.0', '95.64.42.255' ),
		array( '95.64.110.0', '95.64.111.255' ),
		array( '95.128.168.0', '95.128.168.255' ),
		array( '95.128.174.0', '95.128.175.255' ),
		array( '95.187.0.0', '95.187.127.255' ),
		array( '178.255.36.0', '178.255.37.255' ),
		array( '178.255.38.0', '178.255.38.255' ),
		array( '188.208.0.0', '188.208.15.255' ),
		array( '188.215.0.0', '188.215.0.255' ),
		array( '188.215.32.0', '188.215.35.255' ),
		array( '188.229.19.0', '188.229.19.255' ),
		array( '188.229.20.0', '188.229.23.255' ),
		array( '188.229.38.0', '188.229.38.255' ),
		array( '188.229.103.0', '188.229.103.255' ),
		array( '188.229.104.0', '188.229.111.255' ),
		array( '188.229.124.0', '188.229.127.255' ),
		array( '188.240.36.0', '188.240.39.255' ),
		array( '188.240.160.0', '188.240.175.255' ),
		array( '188.240.192.0', '188.240.223.255' ),
		array( '188.247.128.0', '188.247.128.255' ),
		array( '188.247.228.0', '188.247.229.255' ),
		'Rackspace Server',
		array( '134.213.0.0', '134.213.255.255' ),
		array( '146.177.0.0', '146.177.255.255' ),
		array( '162.13.0.0', '162.13.255.255' ),
		array( '212.100.224.0', '212.100.255.255' ),
		array( '212.100.227.128', '212.100.227.191' ),
		array( '212.100.227.64', '212.100.227.127' ),
		array( '212.100.229.64', '212.100.229.127' ),
		array( '212.21.64.0', '212.21.95.255' ),
		array( '212.42.224.0', '212.42.255.255' ),
		array( '212.62.19.96', '212.62.19.99' ),
		array( '213.152.230.104', '213.152.230.111' ),
		array( '213.207.95.0', '213.207.95.31' ),
		array( '78.136.0.0', '78.136.63.255' ),
		array( '78.136.12.48', '78.136.12.55' ),
		array( '78.136.15.48', '78.136.15.55' ),
		array( '78.136.37.40', '78.136.37.47' ),
		array( '78.136.50.96', '78.136.50.103' ),
		array( '78.136.51.224', '78.136.51.231' ),
		array( '78.136.62.192', '78.136.62.255' ),
		array( '78.136.7.0', '78.136.7.63' ),
		array( '83.138.128.0', '83.138.191.255' ),
		array( '83.138.128.64', '83.138.128.127' ),
		array( '83.138.129.192', '83.138.129.255' ),
		array( '83.138.141.128', '83.138.141.191' ),
		array( '83.138.144.64', '83.138.144.137' ),
		array( '83.138.145.192', '83.138.145.255' ),
		array( '83.138.146.192', '83.138.146.255' ),
		array( '83.138.147.128', '83.138.147.191' ),
		array( '83.138.151.128', '83.138.151.191' ),
		array( '83.138.151.192', '83.138.151.255' ),
		array( '83.138.152.64', '83.138.152.127' ),
		array( '83.138.167.128', '83.138.167.135' ),
		array( '83.138.170.128', '83.138.170.135' ),
		array( '83.138.176.144', '83.138.176.151' ),
		array( '83.138.176.16', '83.138.176.31' ),
		array( '83.220.157.64', '83.220.157.67' ),
		array( '83.220.157.68', '83.220.157.71' ),
		array( '87.213.46.32', '87.213.46.39' ),
		array( '87.225.128.0', '87.225.255.255' ),
		array( '89.234.0.0', '89.234.63.255' ),
		array( '89.234.23.48', '89.234.23.55' ),
		array( '89.234.30.128', '89.234.30.255' ),
		array( '89.234.34.184', '89.234.34.191' ),
		array( '92.52.101.48', '92.52.101.55' ),
		array( '92.52.110.96', '92.52.110.127' ),
		array( '92.52.113.72', '92.52.113.79' ),
		array( '92.52.117.240', '92.52.117.255' ),
		array( '92.52.126.0', '92.52.126.15' ),
		array( '92.52.126.128', '92.52.126.191' ),
		array( '92.52.126.192', '92.52.126.255' ),
		array( '92.52.126.32', '92.52.126.39' ),
		array( '92.52.126.40', '92.52.126.47' ),
		array( '92.52.126.48', '92.52.126.63' ),
		array( '92.52.126.64', '92.52.126.127' ),
		array( '92.52.127.0', '92.52.127.15' ),
		array( '92.52.127.128', '92.52.127.191' ),
		array( '92.52.127.192', '92.52.127.255' ),
		array( '92.52.127.32', '92.52.127.47' ),
		array( '92.52.127.48', '92.52.127.63' ),
		array( '92.52.127.64', '92.52.127.127' ),
		array( '92.52.64.0', '92.52.127.255' ),
		array( '92.52.71.192', '92.52.71.255' ),
		array( '92.52.76.0', '92.52.76.63' ),
		array( '92.52.76.128', '92.52.76.255' ),
		array( '92.52.76.64', '92.52.76.127' ),
		array( '92.52.85.160', '92.52.85.191' ),
		array( '92.52.99.192', '92.52.99.199' ),
		array( '94.236.0.0', '94.236.127.255' ),
		array( '108.166.0.0', '108.166.127.255' ),
		array( '108.171.160.0', '108.171.191.255' ),
		array( '162.209.0.0', '162.209.127.255' ),
		array( '162.242.128.0', '162.242.255.255' ),
		array( '166.78.0.0', '166.78.255.255' ),
		array( '173.203.0.0', '173.203.255.255' ),
		array( '173.45.224.0', '173.45.255.255' ),
		array( '174.143.0.0', '174.143.255.255' ),
		array( '184.106.0.0', '184.106.255.255' ),
		array( '192.237.128.0', '192.237.255.255' ),
		array( '198.101.128.0', '198.101.255.255' ),
		array( '198.61.128.0', '198.61.255.255' ),
		array( '204.232.128.0', '204.232.255.255' ),
		array( '207.97.192.0', '207.97.255.255' ),
		array( '208.78.96.0', '208.78.103.255' ),
		array( '209.114.32.0', '209.114.63.255' ),
		array( '209.20.64.0', '209.20.95.255' ),
		array( '209.61.128.0', '209.61.191.255' ),
		array( '23.253.0.0', '23.253.255.255' ),
		array( '50.56.0.0', '50.57.255.255' ),
		array( '64.39.0.0', '64.39.31.255' ),
		array( '64.49.192.0', '64.49.255.255' ),
		array( '65.61.128.0', '65.61.191.255' ),
		array( '66.216.64.0', '66.216.127.255' ),
		array( '67.192.0.0', '67.192.255.255' ),
		array( '67.207.128.0', '67.207.159.255' ),
		array( '67.23.0.0', '67.23.47.255' ),
		array( '69.20.0.0', '69.20.127.255' ),
		array( '72.3.128.0', '72.3.255.255' ),
		array( '72.32.0.0', '72.32.255.255' ),
		array( '72.4.112.0', '72.4.127.255' ),
		array( '74.205.0.0', '74.205.127.255' ),
		array( '98.129.0.0', '98.129.255.255' ),
		'Peer 1',
		array( '64.69.64.0', '64.69.95.255' ),
		array( '216.187.64.0', '216.187.127.255' ),
		array( '66.199.128.0', '66.199.191.255' ),
		array( '65.39.128.0', '65.39.255.255' ),
		array( '69.28.192.0', '69.28.255.255' ),
		array( '69.90.0.0', '69.90.255.255' ),
		array( '206.223.127.0', '206.223.127.255' ),
		array( '206.223.139.0', '206.223.139.255' ),
		array( '64.34.0.0', '64.34.255.255' ),
		array( '72.51.0.0', '72.51.63.255' ),
		array( '76.74.128.0', '76.74.255.255' ),
		array( '70.33.192.0', '70.33.255.255' ),
		array( '69.172.192.0', '69.172.255.255' ),
		array( '107.6.0.0', '107.6.63.255' ),
		'OVH Hosting',
		array( '198.50.241.160', '198.50.241.163' ),
		array( '192.95.53.232', '192.95.53.235' ),
		array( '198.50.235.28', '198.50.235.31' ),
		array( '192.95.0.140', '192.95.0.143' ),
		array( '192.95.13.192', '192.95.13.223' ),
		array( '142.4.205.0', '142.4.205.255' ),
		array( '142.4.207.0', '142.4.207.255' ),
		array( '192.95.0.96', '192.95.0.111' ),
		array( '192.99.159.64', '192.99.159.95' ),
		array( '198.50.173.156', '198.50.173.159' ),
		array( '192.99.142.128', '192.99.142.191' ),
		array( '198.50.235.140', '198.50.235.143' ),
		array( '198.50.255.0', '198.50.255.255' ),
		array( '192.95.11.112', '192.95.11.127' ),
		array( '192.95.3.32', '192.95.3.35' ),
		array( '198.50.177.56', '198.50.177.63' ),
		array( '192.99.173.0', '192.99.173.127' ),
		array( '192.95.47.16', '192.95.47.31' ),
		array( '192.95.7.240', '192.95.7.255' ),
		array( '192.95.53.240', '192.95.53.243' ),
		array( '198.50.222.72', '198.50.222.79' ),
		array( '198.50.230.48', '198.50.230.63' ),
		array( '198.50.226.240', '198.50.226.255' ),
		array( '192.95.15.224', '192.95.15.231' ),
		array( '198.50.211.144', '198.50.211.159' ),
		array( '198.50.184.128', '198.50.184.191' ),
		array( '192.99.143.24', '192.99.143.31' ),
		array( '198.50.242.128', '198.50.242.143' ),
		array( '198.50.227.44', '198.50.227.47' ),
		array( '198.50.214.64', '198.50.214.95' ),
		array( '198.50.188.0', '198.50.188.255' ),
		array( '192.99.138.32', '192.99.138.63' ),
		array( '198.50.213.192', '198.50.213.199' ),
		array( '192.95.35.16', '192.95.35.31' ),
		array( '198.50.167.84', '198.50.167.87' ),
		array( '198.50.234.84', '198.50.234.87' ),
		array( '192.99.139.0', '192.99.139.255' ),
		array( '192.95.8.240', '192.95.8.243' ),
		array( '198.27.109.64', '198.27.109.95' ),
		array( '198.50.228.132', '198.50.228.135' ),
		array( '198.50.192.112', '198.50.192.127' ),
		array( '198.50.162.8', '198.50.162.11' ),
		array( '198.50.231.32', '198.50.231.47' ),
		array( '198.50.205.100', '198.50.205.103' ),
		array( '198.50.253.128', '198.50.253.143' ),
		array( '198.27.120.32', '198.27.120.47' ),
		array( '192.95.13.32', '192.95.13.63' ),
		array( '192.99.138.64', '192.99.138.95' ),
		array( '198.50.196.48', '198.50.196.63' ),
		array( '192.99.142.192', '192.99.142.223' ),
		array( '142.4.206.0', '142.4.206.255' ),
		array( '198.50.234.88', '198.50.234.91' ),
		array( '192.95.11.184', '192.95.11.191' ),
		array( '198.50.212.32', '198.50.212.39' ),
		array( '198.50.236.64', '198.50.236.79' ),
		array( '198.50.189.208', '198.50.189.211' ),
		array( '192.99.138.160', '192.99.138.191' ),
		array( '192.95.53.76', '192.95.53.79' ),
		array( '198.50.182.144', '198.50.182.147' ),
		array( '198.50.233.176', '198.50.233.191' ),
		array( '198.50.252.52', '198.50.252.55' ),
		array( '198.27.117.112', '198.27.117.127' ),
		array( '192.95.40.224', '192.95.40.239' ),
		array( '192.95.12.60', '192.95.12.63' ),
		array( '198.50.138.24', '198.50.138.31' ),
		array( '192.95.46.160', '192.95.46.175' ),
		array( '198.50.214.96', '198.50.214.103' ),
		array( '198.27.117.208', '198.27.117.223' ),
		array( '198.27.120.88', '198.27.120.91' ),
		array( '198.50.137.32', '198.50.137.47' ),
		array( '198.50.162.76', '198.50.162.79' ),
		array( '192.99.142.40', '192.99.142.47' ),
		array( '198.50.156.0', '198.50.159.255' ),
		array( '198.50.183.208', '198.50.183.223' ),
		array( '198.50.139.84', '198.50.139.87' ),
		array( '192.99.143.20', '192.99.143.23' ),
		array( '198.50.132.128', '198.50.132.255' ),
		array( '142.4.192.56', '142.4.192.63' ),
		array( '198.50.234.64', '198.50.234.71' ),
		array( '198.50.215.36', '198.50.215.39' ),
		array( '198.50.193.104', '198.50.193.111' ),
		array( '192.95.46.188', '192.95.46.191' ),
		array( '192.99.137.0', '192.99.137.127' ),
		array( '192.95.15.192', '192.95.15.195' ),
		array( '198.50.230.100', '198.50.230.103' ),
		array( '192.99.173.128', '192.99.173.255' ),
		array( '192.99.136.148', '192.99.136.151' ),
		array( '192.99.140.60', '192.99.140.63' ),
		array( '198.50.215.160', '198.50.215.175' ),
		array( '198.50.218.96', '198.50.218.127' ),
		array( '198.50.235.192', '198.50.235.195' ),
		array( '198.50.250.4', '198.50.250.7' ),
		array( '142.4.193.128', '142.4.193.143' ),
		array( '192.95.10.0', '192.95.10.15' ),
		array( '198.50.162.224', '198.50.162.239' ),
		array( '198.50.138.16', '198.50.138.23' ),
		array( '192.95.11.160', '192.95.11.175' ),
		array( '192.95.15.84', '192.95.15.87' ),
		array( '192.99.140.56', '192.99.140.59' ),
		array( '192.99.141.128', '192.99.141.191' ),
		array( '192.95.55.192', '192.95.55.199' ),
		array( '198.50.135.160', '198.50.135.167' ),
		array( '192.95.0.0', '192.95.63.255' ),
		array( '192.95.8.224', '192.95.8.239' ),
		array( '142.4.193.184', '142.4.193.187' ),
		array( '198.50.236.80', '198.50.236.83' ),
		array( '192.99.24.160', '192.99.24.191' ),
		array( '142.4.193.144', '142.4.193.159' ),
		array( '8.33.128.0', '8.33.135.255' ),
		array( '8.33.96.0', '8.33.103.255' ),
		array( '8.30.208.0', '8.30.215.255' ),
		array( '8.24.8.0', '8.24.15.255' ),
		array( '8.18.136.0', '8.18.143.255' ),
		array( '198.50.234.72', '198.50.234.79' ),
		array( '192.99.137.200', '192.99.137.207' ),
		array( '8.33.137.0', '8.33.137.255' ),
		array( '8.33.136.0', '8.33.136.255' ),
		array( '8.29.224.0', '8.29.224.255' ),
		array( '8.26.94.0', '8.26.94.255' ),
		array( '8.21.41.0', '8.21.41.255' ),
		array( '8.20.110.0', '8.20.110.255' ),
		array( '8.18.172.0', '8.18.172.255' ),
		array( '8.18.128.0', '8.18.128.255' ),
		array( '8.7.244.0', '8.7.244.255' ),
		array( '198.50.216.184', '198.50.216.187' ),
		array( '198.50.230.240', '198.50.230.247' ),
		array( '198.50.254.0', '198.50.254.63' ),
		array( '198.50.221.192', '198.50.221.207' ),
		array( '198.27.90.80', '198.27.90.95' ),
		array( '192.99.141.240', '192.99.141.243' ),
		array( '192.99.24.148', '192.99.24.151' ),
		array( '198.245.48.0', '198.245.63.255' ),
		array( '198.50.225.96', '198.50.225.111' ),
		array( '198.50.222.192', '198.50.222.207' ),
		array( '198.50.131.164', '198.50.131.167' ),
		array( '192.99.137.224', '192.99.137.239' ),
		array( '198.50.233.112', '198.50.233.127' ),
		array( '198.50.184.32', '198.50.184.47' ),
		array( '198.50.223.128', '198.50.223.191' ),
		array( '198.50.234.224', '198.50.234.239' ),
		array( '198.27.112.144', '198.27.112.159' ),
		array( '198.100.144.0', '198.100.159.255' ),
		array( '198.50.184.216', '198.50.184.223' ),
		array( '198.50.213.208', '198.50.213.223' ),
		array( '198.50.237.192', '198.50.237.207' ),
		array( '192.95.54.128', '192.95.54.131' ),
		array( '192.99.143.16', '192.99.143.19' ),
		array( '198.50.241.72', '198.50.241.75' ),
		array( '142.4.192.0', '142.4.223.255' ),
		array( '192.99.141.228', '192.99.141.231' ),
		array( '198.50.129.32', '198.50.129.47' ),
		array( '198.50.233.64', '198.50.233.67' ),
		array( '198.27.64.0', '198.27.127.255' ),
		array( '198.50.160.8', '198.50.160.15' ),
		array( '198.27.96.148', '198.27.96.151' ),
		array( '192.95.6.112', '192.95.6.127' ),
		array( '198.27.79.64', '198.27.79.79' ),
		array( '198.27.79.176', '198.27.79.191' ),
		array( '192.99.158.0', '192.99.158.127' ),
		array( '192.99.156.96', '192.99.156.127' ),
		array( '198.50.207.224', '198.50.207.255' ),
		array( '192.95.19.0', '192.95.19.255' ),
		array( '192.95.20.0', '192.95.20.255' ),
		array( '192.95.21.0', '192.95.21.255' ),
		array( '192.95.50.144', '192.95.50.159' ),
		array( '192.95.51.176', '192.95.51.191' ),
		array( '192.95.53.32', '192.95.53.47' ),
		array( '198.50.142.208', '198.50.142.223' ),
		array( '198.50.163.64', '198.50.163.79' ),
		array( '192.95.59.0', '192.95.59.63' ),
		array( '198.50.138.0', '198.50.138.7' ),
		array( '192.95.11.240', '192.95.11.255' ),
		array( '192.95.11.16', '192.95.11.31' ),
		array( '198.50.162.12', '198.50.162.15' ),
		array( '192.95.42.96', '192.95.42.111' ),
		array( '192.95.48.0', '192.95.48.15' ),
		array( '198.50.128.0', '198.50.255.255' ),
		array( '192.95.43.128', '192.95.43.143' ),
		array( '198.50.167.56', '198.50.167.63' ),
		array( '198.50.205.0', '198.50.205.63' ),
		array( '198.50.137.160', '198.50.137.175' ),
		array( '198.50.170.80', '198.50.170.95' ),
		array( '198.50.178.40', '198.50.178.47' ),
		array( '198.50.231.128', '198.50.231.135' ),
		array( '198.50.231.136', '198.50.231.143' ),
		array( '198.50.236.0', '198.50.236.15' ),
		array( '198.50.184.16', '198.50.184.31' ),
		array( '142.4.204.0', '142.4.204.255' ),
		array( '198.50.160.64', '198.50.160.95' ),
		array( '192.95.12.96', '192.95.12.127' ),
		array( '192.95.46.112', '192.95.46.127' ),
		array( '192.95.57.128', '192.95.57.143' ),
		array( '198.50.164.64', '198.50.164.127' ),
		array( '198.50.226.208', '198.50.226.215' ),
		array( '198.50.196.112', '198.50.196.127' ),
		array( '198.50.237.84', '198.50.237.87' ),
		array( '198.50.234.112', '198.50.234.127' ),
		array( '198.50.129.80', '198.50.129.83' ),
		array( '192.95.54.156', '192.95.54.159' ),
		array( '198.50.226.48', '198.50.226.63' ),
		array( '198.50.250.48', '198.50.250.63' ),
		array( '198.50.133.192', '198.50.133.223' ),
		array( '198.27.121.144', '198.27.121.159' ),
		array( '198.50.254.180', '198.50.254.183' ),
		array( '198.50.231.208', '198.50.231.223' ),
		array( '192.99.136.152', '192.99.136.155' ),
		array( '198.50.132.64', '198.50.132.127' ),
		array( '198.50.128.176', '198.50.128.191' ),
		array( '198.100.158.0', '198.100.159.255' ),
		array( '192.95.60.200', '192.95.60.207' ),
		array( '198.27.110.160', '198.27.110.191' ),
		array( '198.50.205.192', '198.50.205.195' ),
		array( '198.50.209.160', '198.50.209.175' ),
		array( '198.50.136.64', '198.50.136.67' ),
		array( '198.50.172.80', '198.50.172.87' ),
		array( '198.50.171.96', '198.50.171.127' ),
		array( '192.99.0.0', '192.99.255.255' ),
		array( '142.4.192.224', '142.4.192.231' ),
		array( '192.95.62.164', '192.95.62.167' ),
		array( '198.27.98.144', '198.27.98.159' ),
		array( '198.27.117.192', '198.27.117.199' ),
		array( '198.27.117.200', '198.27.117.203' ),
		array( '198.27.89.0', '198.27.89.255' ),
		array( '198.50.168.64', '198.50.168.71' ),
		array( '198.50.229.64', '198.50.229.79' ),
		array( '198.100.153.0', '198.100.153.255' ),
		array( '198.50.199.24', '198.50.199.27' ),
		array( '192.95.4.68', '192.95.4.71' ),
		array( '198.27.122.128', '198.27.122.255' ),
		array( '192.99.138.0', '192.99.138.31' ),
		array( '198.50.204.40', '198.50.204.43' ),
		array( '198.50.167.40', '198.50.167.43' ),
		array( '192.95.40.128', '192.95.40.131' ),
		array( '142.4.195.192', '142.4.195.223' ),
		array( '142.4.192.176', '142.4.192.191' ),
		array( '192.95.50.96', '192.95.50.111' ),
		array( '198.50.178.36', '198.50.178.39' ),
		array( '198.50.184.0', '198.50.184.15' ),
		array( '198.50.183.240', '198.50.183.255' ),
		array( '198.50.185.192', '198.50.185.207' ),
		array( '198.50.187.104', '198.50.187.111' ),
		array( '198.50.167.96', '198.50.167.127' ),
		array( '198.50.187.52', '198.50.187.55' ),
		array( '198.50.171.208', '198.50.171.215' ),
		array( '142.4.198.192', '142.4.198.207' ),
		array( '198.50.248.32', '198.50.248.63' ),
		array( '192.99.136.176', '192.99.136.179' ),
		array( '142.4.192.140', '142.4.192.143' ),
		array( '198.50.132.0', '198.50.132.15' ),
		array( '192.95.55.64', '192.95.55.67' ),
		array( '192.99.159.32', '192.99.159.63' ),
		array( '198.27.100.128', '198.27.100.143' ),
		array( '192.99.159.128', '192.99.159.255' ),
		array( '198.50.225.0', '198.50.225.63' ),
		array( '192.95.40.80', '192.95.40.95' )
	);
}

?>