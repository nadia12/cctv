class CreateProfiles < ActiveRecord::Migration
  def change
    create_table :profiles do |t|
      t.string :first_name
      t.string :last_name
      t.integer :mobile_phone
      t.integer :phone
      t.text :bio
      t.integer :user_id

      t.timestamps
    end
  end
end
