<%@ Language="VBScript" %> 
<% If DatePart("y",Now) <= 172 And DatePart("y", Now) >=79 Then %> 
<b>Spring Time Chummies</b> 
<% elseif DatePart("y",Now) <= 263 And DatePart("y", Now) >=173 Then %> 
<b>SummerTime Chummies</b> 
<% elseif DatePart("y",Now) <= 355 And DatePart("y", Now) >=264 Then %> 
<b>FallTime Chummies</b> 
<% else %> 
<b>Winter Chummies</b> 
<% End If %> 
