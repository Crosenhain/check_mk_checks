require 'open-uri'
require 'nokogiri'
require 'mechanize'
require 'openssl'

#OpenSSL::SSL::VERIFY_PEER = OpenSSL::SSL::VERIFY_NONE
#I_KNOW_THAT_OPENSSL_VERIFY_PEER_EQUALS_VERIFY_NONE_IS_WRONG = nil

hostname = ARGV[0]
username = ARGV[1]
password = ARGV[2]

$cuda_agent = Mechanize.new
auth = $cuda_agent.post "https://"+hostname+"/cgi-mod/index.cgi"
# Select the first form
form = auth.form('f')
form['user'] = username
#base64 encoded password is required to log in
form['password'] = password
# Submit the form
page = $cuda_agent.submit(form, form.buttons.first)

doc = page

puts "<<<check_mk>>>"
puts "Version: 1.1"
puts "AgentOS: BarracudaSpamFirewall"
#Inbound
puts "<<<barracudaminiinbound>>>"
puts ((doc.xpath('//tr[@id="config_module_row_1"]/td[5]/div/div/text()')[0]).to_s).to_i.to_s + " " + ((doc.xpath('//tr[@id="config_module_row_2"]/td[5]/div/div/text()')[0]).to_s).to_i.to_s + " " + ((doc.xpath('//tr[@id="config_module_row_3"]/td[5]/div/div/text()')[0]).to_s).to_i.to_s + " " + ((doc.xpath('//tr[@id="config_module_row_4"]/td[5]/div/div/text()')[0]).to_s).to_i.to_s + " " + ((doc.xpath('//tr[@id="config_module_row_5"]/td[5]/div/div/text()')[0]).to_s).to_i.to_s + " " + ((doc.xpath('//tr[@id="config_module_row_6"]/td[5]/div/div/text()')[0]).to_s).to_i.to_s

#Outbound
puts "<<<barracudaminioutbound>>>"
puts ((doc.xpath('//tr[@id="config_module_row_1"]/td[5]/div/div/text()')[1]).to_s).to_i.to_s + " " + ((doc.xpath('//tr[@id="config_module_row_2"]/td[5]/div/div/text()')[1]).to_s).to_i.to_s + " " + ((doc.xpath('//tr[@id="config_module_row_3"]/td[5]/div/div/text()')[1]).to_s).to_i.to_s + " " + ((doc.xpath('//tr[@id="config_module_row_4"]/td[5]/div/div/text()')[1]).to_s).to_i.to_s + " " + ((doc.xpath('//tr[@id="config_module_row_5"]/td[5]/div/div/text()')[1]).to_s).to_i.to_s + " " + ((doc.xpath('//tr[@id="config_module_row_6"]/td[5]/div/div/text()')[1]).to_s).to_i.to_s + " " + ((doc.xpath('//tr[@id="config_module_row_7"]/td[5]/div/div/text()')[1]).to_s).to_i.to_s + " " + ((doc.xpath('//tr[@id="config_module_row_8"]/td[5]/div/div/text()')[0]).to_s).to_i.to_s

#Performance
# Queues
puts "<<<barracudaminiqueues>>>"
puts ((doc.xpath('//div[@id="health_module"]//dl[@id="none"]//a/text()')[0]).to_s).to_i.to_s + " " + ((doc.xpath('//div[@id="health_module"]//dl[@id="none"]//a/text()')[1]).to_s).to_i.to_s

# Message Latency
puts "<<<barracudaminilatency>>>"
puts ((doc.xpath('//div[@id="health_module"]//dl[@id="none"]//span/text()')[1]).to_s).to_i.to_s

# System Load
puts "<<<barracudaminiload>>>"
puts ((doc.xpath('//div[@id="health_module"]//dl[@id="none"]//span/text()')[4]).to_s).to_i.to_s
