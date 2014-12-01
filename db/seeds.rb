# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rake db:seed (or created alongside the db with db:setup).
#
# Examples:
#
#   cities = City.create([{ name: 'Chicago' }, { name: 'Copenhagen' }])
#   Mayor.create(name: 'Emanuel', city: cities.first)

# User Admin
User.create({
	email: "admin@yahoo.com",
	password: "12345678",
	password_confirmation: "12345678",
	roles: "admin",
	profile_attributes: 
		{
			first_name: "admin",
			last_name: "master"
		}
	})

# Location List
location_list = ["Hospital","Room 1","Room 2","Room 3", "Service Center","Kitchen"]

location_list.each do |loc|
  Location.create( :name => loc )
end
	
